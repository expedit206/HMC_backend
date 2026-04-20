<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Favorite;
use App\Models\Intervention;
use App\Models\Property;
use App\Models\Rental;
use App\Models\RentalApplication;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RentalSeeder extends Seeder
{
    public function run(): void
    {
        // ─── Récupérer les acteurs ──────────────────────────────────────────────
        $locataires = User::where('role', 'locataire')->get();
        $clients    = User::where('role', 'client')->get();
        $agents     = User::where('role', 'agent')->get();
        $properties = Property::where('status', 'active')->get();

        if ($locataires->isEmpty() || $properties->count() < 4) {
            $this->command->warn('⚠️  Pas assez d\'utilisateurs ou de biens pour le RentalSeeder.');
            return;
        }

        $agent1 = $agents->first();
        $agent2 = $agents->skip(1)->first() ?? $agent1;

        // ══════════════════════════════════════════════════════════════════════
        // LOCATAIRE 1 — Kevin Essomba (Douala) — Location active en cours
        // ══════════════════════════════════════════════════════════════════════
        $kevin = $locataires->firstWhere('email', 'locataire@home.cm') ?? $locataires->first();

        // Bien loué actif (Appartement Bonapriso)
        $propKevin = $properties->where('city', 'Douala')->where('category', 'Appartement')->first()
            ?? $properties->first();

        // Visite préalable
        $visitKevin = Visit::create([
            'property_id'        => $propKevin->id,
            'user_id'            => $kevin->id,
            'agent_id'           => $agent1?->id,
            'scheduled_at'       => now()->subMonths(4),
            'visited_at'         => now()->subMonths(4)->addHours(2),
            'status'             => 'completed',
            'confirmed_by_user'  => true,
            'confirmed_by_agent' => true,
            'visit_fee'          => 15000,
            'fee_payment_status' => 'paid',
            'fee_payment_method' => 'momo',
            'notes'              => 'Visite effectuée. Bien conforme à l\'annonce. Client très intéressé.',
        ]);

        // Candidature de location validée
        $appKevin = RentalApplication::create([
            'property_id'               => $propKevin->id,
            'user_id'                   => $kevin->id,
            'visit_id'                  => $visitKevin->id,
            'agent_id'                  => $agent1?->id,
            'situation_professionnelle'  => 'cdi',
            'revenus_mensuels'           => 750000,
            'has_garant'                => true,
            'notes'                     => 'Ingénieur pétrolier chez Perenco. Revenus stables. Garant employeur.',
            'status'                    => 'validated',
            'reviewed_at'               => now()->subMonths(3)->addDays(5),
            'reviewed_by'               => $agent1?->id,
            'documents'                 => [
                ['type' => 'cni_recto', 'path' => 'docs/kevin_cni_r.pdf', 'uploaded_at' => now()->subMonths(4)->toDateTimeString()],
                ['type' => 'bulletin_salaire', 'path' => 'docs/kevin_salaire.pdf', 'uploaded_at' => now()->subMonths(4)->toDateTimeString()],
                ['type' => 'contrat_travail', 'path' => 'docs/kevin_contrat.pdf', 'uploaded_at' => now()->subMonths(4)->toDateTimeString()],
            ],
            'signed_by_applicant' => true,
            'signed_at'           => now()->subMonths(3),
        ]);

        // Location active
        $rentalKevin = Rental::create([
            'property_id'           => $propKevin->id,
            'application_id'        => $appKevin->id,
            'tenant_id'             => $kevin->id,
            'agent_id'              => $agent1?->id,
            'start_date'            => now()->subMonths(3),
            'end_date'              => now()->addMonths(9),
            'price'                 => $propKevin->price,
            'monthly_rent'          => $propKevin->price,
            'advance_months'        => 3,
            'caution_amount'        => $propKevin->price * 2,
            'advance_amount'        => $propKevin->price * 3,
            'status'                => 'active',
            'payment_status'        => 'paid',
            'payment_phase_status'  => 'confirmed',
            'payment_confirmed_at'  => now()->subMonths(3),
            'payment_confirmed_by'  => $agent1?->id,
            'notes'                 => 'Locataire exemplaire. Paiement systématiquement en avance via MoMo.',
        ]);
        $propKevin->update(['status' => 'rented']);

        // 3 mois de loyers payés via MoMo
        for ($i = 0; $i < 3; $i++) {
            Transaction::create([
                'user_id'        => $kevin->id,
                'rental_id'      => $rentalKevin->id,
                'reference'      => 'HMC-RENT-' . strtoupper(Str::random(8)),
                'type'           => 'payment',
                'rental_payment_type' => 'loyer',
                'amount'         => $propKevin->price,
                'currency'       => 'XAF',
                'status'         => 'successful',
                'payment_method' => 'momo',
                'metadata'       => [
                    'mois'        => now()->subMonths($i)->format('F Y'),
                    'operateur'   => 'MTN Mobile Money',
                    'telephone'   => $kevin->phone,
                ],
                'created_at' => now()->subMonths($i)->startOfMonth()->addDays(1),
                'updated_at' => now()->subMonths($i)->startOfMonth()->addDays(1),
            ]);
        }

        // Avance & caution initiale
        Transaction::create([
            'user_id'                 => $kevin->id,
            'rental_id'               => $rentalKevin->id,
            'rental_application_id'   => $appKevin->id,
            'reference'               => 'HMC-INIT-' . strtoupper(Str::random(8)),
            'type'                    => 'payment',
            'rental_payment_type'     => 'avance',
            'amount'                  => $propKevin->price * 3,
            'currency'                => 'XAF',
            'status'                  => 'successful',
            'payment_method'          => 'om',
            'confirmed_by_agent_id'   => $agent1?->id,
            'agent_confirmed_at'      => now()->subMonths(3),
            'metadata'                => ['description' => '3 mois d\'avance + caution', 'operateur' => 'Orange Money'],
            'created_at'              => now()->subMonths(3),
            'updated_at'              => now()->subMonths(3),
        ]);

        // ══════════════════════════════════════════════════════════════════════
        // LOCATAIRE 2 — Flanelle Dongmo (Yaoundé/Bastos) — Location active
        // ══════════════════════════════════════════════════════════════════════
        $flanelle = $locataires->firstWhere('email', 'locataire2@home.cm') ?? $locataires->skip(1)->first();

        if ($flanelle) {
            $propFlanelle = $properties->where('city', 'Yaoundé')->where('category', 'Studio')->first()
                ?? $properties->skip(2)->first();

            if ($propFlanelle && $propFlanelle->status === 'active') {
                $visitFlanelle = Visit::create([
                    'property_id'        => $propFlanelle->id,
                    'user_id'            => $flanelle->id,
                    'agent_id'           => $agent2?->id,
                    'scheduled_at'       => now()->subMonths(5),
                    'visited_at'         => now()->subMonths(5)->addHours(3),
                    'status'             => 'completed',
                    'confirmed_by_user'  => true,
                    'confirmed_by_agent' => true,
                    'visit_fee'          => 15000,
                    'fee_payment_status' => 'paid',
                    'fee_payment_method' => 'om',
                    'notes'              => 'Visite agréable. Cliente sérieuse, conseillère juridique.',
                ]);

                $appFlanelle = RentalApplication::create([
                    'property_id'               => $propFlanelle->id,
                    'user_id'                   => $flanelle->id,
                    'visit_id'                  => $visitFlanelle->id,
                    'agent_id'                  => $agent2?->id,
                    'situation_professionnelle'  => 'fonctionnaire',
                    'revenus_mensuels'           => 420000,
                    'has_garant'                => false,
                    'notes'                     => 'Fonctionnaire au Ministère des Finances. Dossier complet.',
                    'status'                    => 'validated',
                    'reviewed_at'               => now()->subMonths(4)->addDays(3),
                    'reviewed_by'               => $agent2?->id,
                    'documents'                 => [
                        ['type' => 'cni_recto', 'path' => 'docs/flanelle_cni.pdf', 'uploaded_at' => now()->subMonths(5)->toDateTimeString()],
                        ['type' => 'attestation_travail', 'path' => 'docs/flanelle_att.pdf', 'uploaded_at' => now()->subMonths(5)->toDateTimeString()],
                    ],
                    'signed_by_applicant' => true,
                    'signed_at'           => now()->subMonths(4),
                ]);

                $rentalFlanelle = Rental::create([
                    'property_id'          => $propFlanelle->id,
                    'application_id'       => $appFlanelle->id,
                    'tenant_id'            => $flanelle->id,
                    'agent_id'             => $agent2?->id,
                    'start_date'           => now()->subMonths(4),
                    'end_date'             => now()->addMonths(8),
                    'price'                => $propFlanelle->price,
                    'monthly_rent'         => $propFlanelle->price,
                    'advance_months'       => 2,
                    'caution_amount'       => $propFlanelle->price,
                    'advance_amount'       => $propFlanelle->price * 2,
                    'status'               => 'active',
                    'payment_status'       => 'paid',
                    'payment_phase_status' => 'confirmed',
                    'payment_confirmed_at' => now()->subMonths(4),
                    'payment_confirmed_by' => $agent2?->id,
                ]);
                $propFlanelle->update(['status' => 'rented']);

                for ($i = 0; $i < 4; $i++) {
                    Transaction::create([
                        'user_id'             => $flanelle->id,
                        'rental_id'           => $rentalFlanelle->id,
                        'reference'           => 'HMC-RENT-' . strtoupper(Str::random(8)),
                        'type'                => 'payment',
                        'rental_payment_type' => 'loyer',
                        'amount'              => $propFlanelle->price,
                        'currency'            => 'XAF',
                        'status'              => 'successful',
                        'payment_method'      => 'momo',
                        'metadata'            => ['mois' => now()->subMonths($i)->format('F Y'), 'operateur' => 'MTN MoMo'],
                        'created_at'          => now()->subMonths($i)->startOfMonth()->addDays(2),
                        'updated_at'          => now()->subMonths($i)->startOfMonth()->addDays(2),
                    ]);
                }
            }
        }

        // ══════════════════════════════════════════════════════════════════════
        // LOCATAIRE 3 — Ibrahim Moussa (Garoua) — Location terminée + nouvelle recherche
        // ══════════════════════════════════════════════════════════════════════
        $ibrahim = $locataires->firstWhere('email', 'locataire3@home.cm') ?? $locataires->skip(2)->first();

        if ($ibrahim) {
            $propIbrahim = $properties->where('city', 'Garoua')->where('status', 'active')->first()
                ?? $properties->skip(3)->first();

            if ($propIbrahim && $propIbrahim->status === 'active') {
                // Location passée (terminée il y a 6 mois)
                Rental::create([
                    'property_id'  => $propIbrahim->id,
                    'tenant_id'    => $ibrahim->id,
                    'agent_id'     => $agent1?->id,
                    'start_date'   => now()->subYears(1),
                    'end_date'     => now()->subMonths(6),
                    'price'        => $propIbrahim->price,
                    'monthly_rent' => $propIbrahim->price,
                    'advance_months' => 2,
                    'caution_amount' => $propIbrahim->price,
                    'status'       => 'finished',
                    'payment_status' => 'paid',
                    'notes'        => 'Bonne expérience, bien rendu dans l\'état. Locataire recommandé.',
                ]);

                // Transactions historiques
                for ($i = 6; $i < 12; $i++) {
                    Transaction::create([
                        'user_id'             => $ibrahim->id,
                        'reference'           => 'HMC-HIST-' . strtoupper(Str::random(8)),
                        'type'                => 'payment',
                        'rental_payment_type' => 'loyer',
                        'amount'              => $propIbrahim->price,
                        'currency'            => 'XAF',
                        'status'              => 'successful',
                        'payment_method'      => 'om',
                        'metadata'            => ['mois' => now()->subMonths($i)->format('F Y')],
                        'created_at'          => now()->subMonths($i),
                        'updated_at'          => now()->subMonths($i),
                    ]);
                }
            }
        }

        // ══════════════════════════════════════════════════════════════════════
        // LOCATAIRE 4 — Nadège Nguele (Yaoundé) — Candidature en cours
        // ══════════════════════════════════════════════════════════════════════
        $nadege = $locataires->firstWhere('email', 'locataire4@home.cm') ?? $locataires->last();

        if ($nadege) {
            $propNadege = $properties->where('city', 'Yaoundé')->where('status', 'active')
                ->where('category', 'Chambre')->first()
                ?? $properties->where('status', 'active')->last();

            if ($propNadege) {
                // Visite récente
                Visit::create([
                    'property_id'        => $propNadege->id,
                    'user_id'            => $nadege->id,
                    'agent_id'           => $agent1?->id,
                    'scheduled_at'       => now()->addDays(3),
                    'status'             => 'confirmed',
                    'confirmed_by_user'  => true,
                    'confirmed_by_agent' => true,
                    'visit_fee'          => 15000,
                    'fee_payment_status' => 'paid',
                    'fee_payment_method' => 'momo',
                    'notes'              => 'Étudiante en médecine, cherche chambre calme pour révisions.',
                ]);
            }
        }

        // ══════════════════════════════════════════════════════════════════════
        // FAVORIS — Clients et locataires
        // ══════════════════════════════════════════════════════════════════════
        $allUsers = $locataires->merge($clients);
        $availableProps = $properties->where('status', 'active')->values();

        foreach ($allUsers as $user) {
            $nbFav = rand(2, 5);
            $favProps = $availableProps->random(min($nbFav, $availableProps->count()));
            foreach ($favProps as $prop) {
                Favorite::firstOrCreate([
                    'user_id'     => $user->id,
                    'property_id' => $prop->id,
                ]);
            }
        }

        // ══════════════════════════════════════════════════════════════════════
        // INTERVENTIONS — Sur les locations actives
        // ══════════════════════════════════════════════════════════════════════
        $service = Service::inRandomOrder()->first();

        if ($service && $kevin) {
            // Intervention passée complétée avec bonne note
            Intervention::create([
                'service_id'   => $service->id,
                'requester_id' => $kevin->id,
                'property_id'  => $propKevin->id ?? null,
                'scheduled_at' => now()->subMonths(2)->addDays(5),
                'status'       => 'completed',
                'notes'        => 'Fuite d\'eau sous le lavabo de la cuisine. Remplacement du siphon.',
                'completed_at' => now()->subMonths(2)->addDays(5)->addHours(3),
                'rating'       => 5,
                'review'       => 'Intervention rapide et propre. Le plombier est arrivé à l\'heure, travail soigné.',
            ]);

            Intervention::create([
                'service_id'   => $service->id,
                'requester_id' => $kevin->id,
                'property_id'  => $propKevin->id ?? null,
                'scheduled_at' => now()->addDays(4),
                'status'       => 'pending',
                'notes'        => 'Climatiseur du salon ne refroidit plus correctement. Recharge en gaz probable.',
            ]);
        }

        if ($service && $flanelle) {
            Intervention::create([
                'service_id'   => $service->id,
                'requester_id' => $flanelle->id,
                'scheduled_at' => now()->subWeeks(3),
                'status'       => 'completed',
                'notes'        => 'Remplacement d\'un interrupteur défectueux dans la chambre.',
                'completed_at' => now()->subWeeks(3)->addHours(1)->addMinutes(30),
                'rating'       => 4,
                'review'       => 'Bon électricien, travail rapide. Légèrement en retard sur le rendez-vous.',
            ]);
        }

        // ══════════════════════════════════════════════════════════════════════
        // VISITES PENDANTES — Clients prospects
        // ══════════════════════════════════════════════════════════════════════
        $availableForVisit = Property::where('status', 'active')->take(4)->get();
        foreach ($clients->take(3) as $index => $client) {
            $prop = $availableForVisit[$index] ?? $availableForVisit->first();
            Visit::create([
                'property_id'        => $prop->id,
                'user_id'            => $client->id,
                'agent_id'           => $agents->random()->id ?? null,
                'scheduled_at'       => now()->addDays(rand(2, 10)),
                'status'             => 'pending',
                'confirmed_by_user'  => true,
                'confirmed_by_agent' => false,
                'visit_fee'          => 15000,
                'fee_payment_status' => 'pending',
                'notes'              => 'Première visite. Client intéressé, en attente confirmation agent.',
            ]);
        }

        $this->command->info('✅ Locations, paiements, visites et interventions créés avec succès !');
    }
}
