<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Property;
use App\Models\PropertyImage;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get the Bailleur
        $bailleur = User::where('email', 'bailleur@home.cm')->first();

        if ($bailleur) {
            // Create properties with diverse categories
            $propertiesData = [
                ['category' => 'Chambres', 'price' => 25000],
                ['category' => 'Studios', 'price' => 50000],
                ['category' => 'Appartements', 'price' => 120000],
                ['category' => 'Maisons', 'price' => 250000],
                ['category' => 'Villas', 'price' => 500000],
            ];

            foreach ($propertiesData as $data) {
                $properties = Property::factory()->count(2)->create([
                    'user_id' => $bailleur->id,
                    'status' => 'active',
                    'type' => 'rent',
                    'category' => $data['category'],
                    'price' => $data['price'],
                ]);

                foreach ($properties as $property) {
                    PropertyImage::create([
                        'property_id' => $property->id,
                        'path' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&q=80&w=800',
                        'is_primary' => true,
                        'order' => 0,
                    ]);
                }
            }
        }
    }
}
