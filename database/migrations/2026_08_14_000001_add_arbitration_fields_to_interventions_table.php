<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('interventions', function (Blueprint $table): void {
            $table->string('dispute_reason')->nullable()->after('notes');
            $table->string('arbitration_winner')->nullable()->comment('requester, provider, split, cancelled')->after('dispute_reason');
            $table->text('arbitration_notes')->nullable()->after('arbitration_winner');
            $table->foreignId('arbitrated_by')->nullable()->constrained('users')->nullOnDelete()->after('arbitration_notes');
            $table->timestamp('arbitrated_at')->nullable()->after('arbitrated_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('interventions', function (Blueprint $table): void {
            $table->dropForeign(['arbitrated_by']);
            $table->dropColumn([
                'dispute_reason',
                'arbitration_winner',
                'arbitration_notes',
                'arbitrated_by',
                'arbitrated_at',
            ]);
        });
    }
};
