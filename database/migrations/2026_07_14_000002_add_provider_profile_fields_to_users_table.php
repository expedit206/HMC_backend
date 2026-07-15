<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table): void {
            $table->string('headline')->nullable()->after('bio');
            $table->date('provider_since')->nullable()->after('headline');
            $table->decimal('rating', 3, 2)->default(0)->after('provider_since');
            $table->integer('total_interventions')->default(0)->after('rating');
            $table->json('skills')->nullable()->after('total_interventions');
            $table->string('neighborhood')->nullable()->after('city');
            $table->json('provider_experiences')->nullable()->after('skills');
            $table->json('provider_education')->nullable()->after('provider_experiences');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table): void {
            $table->dropColumn([
                'headline', 'provider_since', 'rating', 'total_interventions',
                'skills', 'neighborhood', 'provider_experiences', 'provider_education'
            ]);
        });
    }
};
