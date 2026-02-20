<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Property::with(['owner:id,name,avatar', 'primaryImage'])
            ->where('status', 'active');

        // Filters
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('location', 'like', '%' . $request->search . '%')
                    ->orWhere('city', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%');
            });
        }
        if ($request->filled('type')) {
            $query->where('category', $request->type);
        }
        if ($request->filled('city')) {
            $query->where('city', 'like', '%' . $request->city . '%');
        }
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }
        if ($request->filled('min_rooms') && $request->min_rooms > 0) {
            $query->where('bedrooms', '>=', $request->min_rooms);
        }

        // Sort
        switch ($request->get('sort', 'recent')) {
            case 'price-asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price-desc':
                $query->orderBy('price', 'desc');
                break;
            case 'area':
                $query->orderBy('area', 'desc');
                break;
            default:
                $query->latest();
                break;
        }

        $properties = $query->paginate(8);

        // Normalize image URL for each property
        $properties->getCollection()->transform(function ($p) {
            $primaryImage = $p->primaryImage;
            $p->image = $primaryImage
                ? asset('storage/' . $primaryImage->path)
                : asset('images/categoriebien/villa.jfif');
            $p->rooms    = $p->bedrooms ?? 0;
            $p->owner    = $p->owner;
            return $p;
        });

        // Sidebar aggregates
        $typeAggregates = Property::where('status', 'active')
            ->selectRaw('category as value, count(*) as count')
            ->groupBy('category')
            ->get()
            ->map(fn($t) => ['label' => $t->value, 'value' => $t->value, 'count' => $t->count]);

        $cityAggregates = Property::where('status', 'active')
            ->selectRaw('city as value, count(*) as count')
            ->groupBy('city')
            ->get()
            ->map(fn($c) => ['label' => $c->value, 'value' => $c->value, 'count' => $c->count]);

        return response()->json([
            'success'    => true,
            'data'       => $properties,
            'aggregates' => [
                'types'  => $typeAggregates,
                'cities' => $cityAggregates,
            ],
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:rent,sale',
            'price' => 'required|numeric',
            'location' => 'required|string',
            'city' => 'required|string',
            'description' => 'nullable|string',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'area' => 'nullable|numeric',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $validated['user_id'] = $request->user()->id;
        $validated['slug'] = Str::slug($request->title) . '-' . Str::random(6);
        $validated['status'] = 'pending'; // Default moderation status

        $property = Property::create($validated);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $path = $image->store('properties', 'public');
                $property->images()->create([
                    'path' => $path,
                    'is_primary' => $index === 0,
                    'order' => $index,
                ]);
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Propriété créée avec succès. En attente de modération.',
            'data' => $property->load('images'),
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $property = Property::with(['owner:id,name,email,avatar,phone', 'images'])
            ->findOrFail($id);

        $property->increment('views_count');

        return response()->json([
            'success' => true,
            'data' => $property,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);

        if ($request->user()->id !== $property->user_id && $request->user()->role !== 'admin') {
            return response()->json(['success' => false, 'message' => 'Unauthorized'], 403);
        }

        $property->update($request->only([
            'title',
            'type',
            'price',
            'location',
            'city',
            'description',
            'bedrooms',
            'bathrooms',
            'area',
            'features'
        ]));

        return response()->json([
            'success' => true,
            'message' => 'Propriété mise à jour',
            'data' => $property,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $property = Property::findOrFail($id);

        if ($request->user()->id !== $property->user_id && $request->user()->role !== 'admin') {
            return response()->json(['success' => false, 'message' => 'Unauthorized'], 403);
        }

        // Potential cleanup of images from storage
        $property->delete();

        return response()->json([
            'success' => true,
            'message' => 'Propriété supprimée',
        ]);
    }
}
