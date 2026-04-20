<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * Ordre d'exécution important (contraintes FK) :
     * 1. Users         → tous les acteurs de la plateforme
     * 2. Properties    → biens immobiliers (dépend des users)
     * 3. Products      → marketplace (indépendant)
     * 4. ServiceCategories → catégories prestataires
     * 5. Services      → prestataires + offres + demandes (dépend des users + catégories)
     * 6. Rentals       → locations, paiements, visites, interventions (dépend de tout)
     * 7. Reviews       → avis sur les biens (dépend des properties + users)
     * 8. Notifications → toutes les notifs (dépend de tout)
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            PropertySeeder::class,
            ProductSeeder::class,
            ServiceCategorySeeder::class,
            ServiceSeeder::class,
            RentalSeeder::class,
            ReviewSeeder::class,
            NotificationSeeder::class,
            FormationSeeder::class,
        ]);

        $this->command->info('');
        $this->command->info('🎉 ════════════════════════════════════════════════');
        $this->command->info('🏠  Home Cameroon — Base de données prête pour démo');
        $this->command->info('🎉 ════════════════════════════════════════════════');
        $this->command->info('');
        $this->command->info('📋 Comptes de démonstration :');
        $this->command->info('  👤 Admin       → admin@home.cm         / password');
        $this->command->info('  🏠 Bailleur    → bailleur@home.cm      / password');
        $this->command->info('  🏡 Bailleur 2  → bailleur2@home.cm     / password');
        $this->command->info('  🔑 Locataire   → locataire@home.cm     / password');
        $this->command->info('  🔑 Locataire 2 → locataire2@home.cm    / password');
        $this->command->info('  🔑 Locataire 3 → locataire3@home.cm    / password');
        $this->command->info('  🔍 Client      → client@home.cm        / password');
        $this->command->info('  🔍 Client 2    → client2@home.cm       / password');
        $this->command->info('  🧑‍💼 Agent       → agent@home.cm         / password');
        $this->command->info('  🧑‍💼 Agent 2     → agent2@home.cm        / password');
        $this->command->info('  🔧 Prestataire → jean-paul-kamga-talla@prestataire.cm / password');
        $this->command->info('');
    }
}
