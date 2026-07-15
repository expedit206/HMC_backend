<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('messages', function (Blueprint $table): void {
            $table->foreignId('reply_to_id')->nullable()->after('content')
                ->constrained('messages')->nullOnDelete();
            $table->boolean('is_pinned')->default(false)->after('is_read');
            $table->timestamp('edited_at')->nullable()->after('is_pinned');
        });
    }

    public function down(): void
    {
        Schema::table('messages', function (Blueprint $table): void {
            $table->dropForeign(['reply_to_id']);
            $table->dropColumn(['reply_to_id', 'is_pinned', 'edited_at']);
        });
    }
};
