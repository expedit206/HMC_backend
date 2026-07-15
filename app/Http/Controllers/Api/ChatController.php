<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChatController extends Controller
{
    /**
     * List user's conversations
     */
    public function index(Request $request): JsonResponse
    {
        $userId = $request->user()->id;

        $conversations = Conversation::with(['userOne:id,name,avatar', 'userTwo:id,name,avatar', 'servicePost:id,title'])
            ->where(function ($query) use ($userId) {
                $query->where('user_one_id', $userId)
                      ->orWhere('user_two_id', $userId);
            })
            ->withCount(['messages as unread_count' => function ($query) use ($userId) {
                $query->where('sender_id', '!=', $userId)->where('is_read', false);
            }])
            ->orderByDesc('updated_at')
            ->get()
            ->map(function ($conversation) use ($userId) {
                // Attach the last message
                $conversation->last_message = Message::where('conversation_id', $conversation->id)
                    ->orderByDesc('created_at')
                    ->first();

                // Determine the "other user"
                $conversation->partner = $conversation->user_one_id === $userId ? $conversation->userTwo : $conversation->userOne;

                return $conversation;
            });

        return response()->json([
            'success' => true,
            'data'    => $conversations
        ]);
    }

    /**
     * Get messages for a specific conversation
     */
    public function show(Request $request, int $id): JsonResponse
    {
        $userId = $request->user()->id;

        $conversation = Conversation::with(['userOne:id,name,avatar,role', 'userTwo:id,name,avatar,role', 'servicePost'])
            ->where(function ($query) use ($userId) {
                $query->where('user_one_id', $userId)->orWhere('user_two_id', $userId);
            })->find($id);

        if (!$conversation) {
            return response()->json(['success' => false, 'message' => 'Conversation introuvable'], 404);
        }

        $messages = Message::with(['sender:id,name,avatar', 'replyTo:id,content,sender_id'])
            ->where('conversation_id', $id)
            ->orderBy('created_at', 'asc')
            ->get();

        $conversation->partner = $conversation->user_one_id === $userId ? $conversation->userTwo : $conversation->userOne;

        return response()->json([
            'success' => true,
            'data'    => [
                'conversation' => $conversation,
                'messages'     => $messages
            ]
        ]);
    }

    /**
     * Start or retrieve a conversation between two users
     */
    public function startOrGet(Request $request): JsonResponse
    {
        $userId = $request->user()->id;

        $validator = Validator::make($request->all(), [
            'partner_id'      => 'required|integer|exists:users,id',
            'service_post_id' => 'nullable|integer|exists:service_posts,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        $partnerId     = (int) $request->partner_id;
        $servicePostId = $request->service_post_id ? (int) $request->service_post_id : null;

        if ($partnerId === $userId) {
            return response()->json(['success' => false, 'message' => 'Impossible de démarrer une conversation avec soi-même'], 400);
        }

        // Find existing conversation between these two users
        $conversation = Conversation::where(function ($q) use ($userId, $partnerId) {
            $q->where('user_one_id', $userId)->where('user_two_id', $partnerId);
        })->orWhere(function ($q) use ($userId, $partnerId) {
            $q->where('user_one_id', $partnerId)->where('user_two_id', $userId);
        })->when($servicePostId, fn($q) => $q->where('service_post_id', $servicePostId))
          ->first();

        if (!$conversation) {
            $conversation = Conversation::create([
                'user_one_id'     => $userId,
                'user_two_id'     => $partnerId,
                'service_post_id' => $servicePostId,
                'status'          => 'active',
            ]);
        }

        return response()->json([
            'success' => true,
            'data'    => ['conversation_id' => $conversation->id]
        ]);
    }

    /**
     * Send a message
     */
    public function sendMessage(Request $request, int $id): JsonResponse
    {
        $userId = $request->user()->id;

        $conversation = Conversation::where(function ($query) use ($userId) {
            $query->where('user_one_id', $userId)->orWhere('user_two_id', $userId);
        })->find($id);

        if (!$conversation) {
            return response()->json(['success' => false, 'message' => 'Conversation introuvable'], 404);
        }

        if ($conversation->status === 'closed') {
            return response()->json(['success' => false, 'message' => 'Conversation clôturée'], 403);
        }

        $validator = Validator::make($request->all(), [
            'content'      => 'required|string',
            'reply_to_id'  => 'nullable|integer|exists:messages,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors()
            ], 422);
        }

        $message = Message::create([
            'conversation_id' => $id,
            'sender_id'       => $userId,
            'content'         => $request->input('content'),
            'is_read'         => false,
            'reply_to_id'     => $request->input('reply_to_id'),
        ]);

        $message->load(['sender:id,name,avatar', 'replyTo:id,content,sender_id']);

        // Touch the conversation to update updated_at
        $conversation->update(['updated_at' => now()]);

        return response()->json([
            'success' => true,
            'data'    => $message
        ], 201);
    }

    /**
     * Edit a message
     */
    public function updateMessage(Request $request, int $id): JsonResponse
    {
        $userId  = $request->user()->id;
        $message = Message::find($id);

        if (!$message || $message->sender_id !== $userId) {
            return response()->json(['success' => false, 'message' => 'Non autorisé'], 403);
        }

        $validator = Validator::make($request->all(), ['content' => 'required|string']);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        $message->update([
            'content'   => $request->input('content'),
            'edited_at' => now(),
        ]);

        return response()->json(['success' => true, 'data' => $message]);
    }

    /**
     * Delete a message
     */
    public function deleteMessage(Request $request, int $id): JsonResponse
    {
        $userId  = $request->user()->id;
        $message = Message::find($id);

        if (!$message || $message->sender_id !== $userId) {
            return response()->json(['success' => false, 'message' => 'Non autorisé'], 403);
        }

        $message->delete();

        return response()->json(['success' => true, 'message' => 'Message supprimé']);
    }

    /**
     * Toggle pin a message
     */
    public function pinMessage(Request $request, int $id): JsonResponse
    {
        $userId       = $request->user()->id;
        $message      = Message::find($id);

        if (!$message) {
            return response()->json(['success' => false, 'message' => 'Message introuvable'], 404);
        }

        // Check user is part of the conversation
        $conversation = Conversation::where(function ($q) use ($userId) {
            $q->where('user_one_id', $userId)->orWhere('user_two_id', $userId);
        })->find($message->conversation_id);

        if (!$conversation) {
            return response()->json(['success' => false, 'message' => 'Non autorisé'], 403);
        }

        $message->update(['is_pinned' => !$message->is_pinned]);

        return response()->json(['success' => true, 'data' => $message]);
    }

    /**
     * Mark messages as read
     */
    public function markAsRead(Request $request, int $id): JsonResponse
    {
        $userId = $request->user()->id;

        $conversation = Conversation::where(function ($query) use ($userId) {
            $query->where('user_one_id', $userId)->orWhere('user_two_id', $userId);
        })->find($id);

        if (!$conversation) {
            return response()->json(['success' => false, 'message' => 'Conversation introuvable'], 404);
        }

        Message::where('conversation_id', $id)
            ->where('sender_id', '!=', $userId)
            ->where('is_read', false)
            ->update(['is_read' => true]);

        return response()->json([
            'success' => true,
            'message' => 'Messages marqués comme lus'
        ]);
    }
}
