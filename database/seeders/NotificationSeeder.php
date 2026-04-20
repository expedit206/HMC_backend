<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    public function run(): void
    {
        $admin      = User::where('role', 'admin')->first();
        $agents     = User::where('role', 'agent')->get();
        $bailleurs  = User::where('role', 'bailleur')->get();
        $locataires = User::where('role', 'locataire')->get();
        $clients    = User::where('role', 'client')->get();

        if (! $admin) {
            $this->command->warn('⚠️  Aucun admin trouvé pour les notifications.');
            return;
        }

        $count = 0;

        // ─── ADMIN ─────────────────────────────────────────────────────────────
        $adminNotifs = [
            [
                'type'         => 'system',
                'title'        => '👤 Nouvel utilisateur inscrit',
                'message'      => 'Kevin Essomba Onana vient de s\'inscrire en tant que Locataire depuis Douala.',
                'detail'       => 'Rôle : Locataire • Ville : Douala',
                'icon'         => 'user-plus',
                'icon_bg'      => 'bg-blue-100',
                'icon_color'   => 'text-blue-600',
                'action_label' => 'Voir le profil',
                'action_link'  => '/admin/utilisateurs',
                'is_read'      => false,
                'offset_hours' => 2,
            ],
            [
                'type'         => 'system',
                'title'        => '🏠 Annonce en attente de validation',
                'message'      => 'Pierre Ndoumbé a soumis "Villa de Prestige — Bonapriso, Douala". En attente de votre validation.',
                'detail'       => 'Catégorie : Villa • Prix : 650 000 XAF/mois',
                'icon'         => 'home',
                'icon_bg'      => 'bg-orange-100',
                'icon_color'   => 'text-orange-600',
                'action_label' => 'Valider l\'annonce',
                'action_link'  => '/admin/demandes-publication',
                'is_read'      => false,
                'offset_hours' => 5,
            ],
            [
                'type'         => 'payment',
                'title'        => '💰 Paiement de loyer reçu',
                'message'      => 'Kevin Essomba a payé le loyer d\'Avril 2026 : 180 000 XAF via MTN Mobile Money.',
                'detail'       => 'Montant : 180 000 XAF • Méthode : MTN MoMo • Statut : Confirmé',
                'icon'         => 'credit-card',
                'icon_bg'      => 'bg-emerald-100',
                'icon_color'   => 'text-emerald-600',
                'action_label' => 'Voir les finances',
                'action_link'  => '/admin/finances',
                'is_read'      => true,
                'offset_hours' => 48,
            ],
            [
                'type'         => 'system',
                'title'        => '🧑‍💼 Candidature agent reçue',
                'message'      => 'Blaise Tsafack Nguemo a soumis sa candidature pour devenir Agent HMC dans la région Centre.',
                'detail'       => 'Ville : Bafoussam • Spécialité : Immobilier résidentiel',
                'icon'         => 'user-tie',
                'icon_bg'      => 'bg-purple-100',
                'icon_color'   => 'text-purple-600',
                'action_label' => 'Examiner la candidature',
                'action_link'  => '/admin/utilisateurs',
                'is_read'      => false,
                'offset_hours' => 8,
            ],
            [
                'type'         => 'system',
                'title'        => '📊 Rapport mensuel disponible',
                'message'      => 'Rapport Mars 2026 : 34 nouvelles locations, 12 annonces publiées, 7 prestataires actifs.',
                'detail'       => 'Revenus plateforme : 2 350 000 XAF • Taux d\'occupation : 78%',
                'icon'         => 'chart-bar',
                'icon_bg'      => 'bg-indigo-100',
                'icon_color'   => 'text-indigo-600',
                'action_label' => 'Voir le rapport',
                'action_link'  => '/admin/finances',
                'is_read'      => true,
                'offset_hours' => 120,
            ],
        ];

        foreach ($adminNotifs as $n) {
            Notification::create([
                'user_id'      => $admin->id,
                'type'         => $n['type'],
                'title'        => $n['title'],
                'message'      => $n['message'],
                'detail'       => $n['detail'],
                'icon'         => $n['icon'],
                'icon_bg'      => $n['icon_bg'],
                'icon_color'   => $n['icon_color'],
                'action_label' => $n['action_label'],
                'action_link'  => $n['action_link'],
                'is_read'      => $n['is_read'],
                'created_at'   => now()->subHours($n['offset_hours']),
                'updated_at'   => now()->subHours($n['offset_hours']),
            ]);
            $count++;
        }

        // ─── AGENTS ────────────────────────────────────────────────────────────
        $agentNotifs = [
            [
                'type'         => 'visit',
                'title'        => '📅 Nouvelle visite à confirmer',
                'message'      => 'Armand Tchatchou souhaite visiter "Appartement F3 — Bonapriso" ' . now()->addDays(3)->format('d/m/Y') . ' à 10h00.',
                'detail'       => 'Frais de visite : 15 000 XAF • Statut : En attente de confirmation',
                'icon'         => 'calendar-check',
                'icon_bg'      => 'bg-green-100',
                'icon_color'   => 'text-green-600',
                'action_label' => 'Confirmer la visite',
                'action_link'  => '/agent/agenda',
                'is_read'      => false,
                'offset_hours' => 3,
            ],
            [
                'type'         => 'application',
                'title'        => '🎯 Nouvelle mission assignée',
                'message'      => 'L\'administration HMC vous a assigné le suivi du dossier de Flanelle Dongmo pour le studio Bastos.',
                'detail'       => 'Dossier : Candidature locative • Bien : Studio Bastos 80 000 XAF/mois',
                'icon'         => 'file-invoice',
                'icon_bg'      => 'bg-orange-100',
                'icon_color'   => 'text-orange-600',
                'action_label' => 'Voir les missions',
                'action_link'  => '/agent/missions',
                'is_read'      => false,
                'offset_hours' => 6,
            ],
            [
                'type'         => 'payment',
                'title'        => '✅ Paiement loyer à confirmer',
                'message'      => 'Kevin Essomba a payé le loyer de Mars 2026 (180 000 XAF via MoMo). Confirmation physique requise.',
                'detail'       => 'Référence : HMC-RENT-XXXX • En attente de votre confirmation terrain',
                'icon'         => 'credit-card',
                'icon_bg'      => 'bg-emerald-100',
                'icon_color'   => 'text-emerald-600',
                'action_label' => 'Confirmer',
                'action_link'  => '/agent/missions',
                'is_read'      => true,
                'offset_hours' => 72,
            ],
        ];

        foreach ($agents->take(2) as $agent) {
            foreach ($agentNotifs as $n) {
                Notification::create([
                    'user_id'      => $agent->id,
                    'type'         => $n['type'],
                    'title'        => $n['title'],
                    'message'      => $n['message'],
                    'detail'       => $n['detail'],
                    'icon'         => $n['icon'],
                    'icon_bg'      => $n['icon_bg'],
                    'icon_color'   => $n['icon_color'],
                    'action_label' => $n['action_label'],
                    'action_link'  => $n['action_link'],
                    'is_read'      => $n['is_read'],
                    'created_at'   => now()->subHours($n['offset_hours']),
                    'updated_at'   => now()->subHours($n['offset_hours']),
                ]);
                $count++;
            }
        }

        // ─── BAILLEURS ─────────────────────────────────────────────────────────
        $bailleurNotifs = [
            [
                'type'         => 'payment',
                'title'        => '💰 Loyer reçu — Avril 2026',
                'message'      => 'Votre locataire a payé le loyer d\'Avril 2026 (180 000 XAF). Virement sur votre compte sous 48h.',
                'detail'       => 'Montant : 180 000 XAF • Via : MTN MoMo • Commission HMC : 5%',
                'icon'         => 'credit-card',
                'icon_bg'      => 'bg-emerald-100',
                'icon_color'   => 'text-emerald-600',
                'action_label' => 'Voir mes finances',
                'action_link'  => '/bailleur/finances',
                'is_read'      => false,
                'offset_hours' => 4,
            ],
            [
                'type'         => 'alert',
                'title'        => '👁 Annonce très consultée cette semaine',
                'message'      => '"Villa de Prestige — Bonapriso" a été vue 247 fois et ajoutée en favori par 12 utilisateurs.',
                'detail'       => 'Vues cette semaine : 247 • Favoris : 12 • Demandes de visite : 3',
                'icon'         => 'eye',
                'icon_bg'      => 'bg-blue-100',
                'icon_color'   => 'text-blue-600',
                'action_label' => 'Voir mon bien',
                'action_link'  => '/bailleur/mes-biens',
                'is_read'      => true,
                'offset_hours' => 24,
            ],
            [
                'type'         => 'visit',
                'title'        => '🔔 Nouvelle demande de visite',
                'message'      => 'Aimérance Yoyo Ebah demande à visiter "Appartement Meublé — Bali" vendredi à 14h30.',
                'detail'       => 'Candidate : Expatriée, cadre supérieure • Agent assigné : Marie-Claire Ngo Biyong',
                'icon'         => 'calendar-check',
                'icon_bg'      => 'bg-green-100',
                'icon_color'   => 'text-green-600',
                'action_label' => 'Voir les visites',
                'action_link'  => '/bailleur/visites',
                'is_read'      => false,
                'offset_hours' => 7,
            ],
        ];

        foreach ($bailleurs->take(3) as $bailleur) {
            foreach ($bailleurNotifs as $n) {
                Notification::create([
                    'user_id'      => $bailleur->id,
                    'type'         => $n['type'],
                    'title'        => $n['title'],
                    'message'      => $n['message'],
                    'detail'       => $n['detail'],
                    'icon'         => $n['icon'],
                    'icon_bg'      => $n['icon_bg'],
                    'icon_color'   => $n['icon_color'],
                    'action_label' => $n['action_label'],
                    'action_link'  => $n['action_link'],
                    'is_read'      => $n['is_read'],
                    'created_at'   => now()->subHours($n['offset_hours']),
                    'updated_at'   => now()->subHours($n['offset_hours']),
                ]);
                $count++;
            }
        }

        // ─── LOCATAIRES ────────────────────────────────────────────────────────
        $locataireNotifs = [
            [
                'type'         => 'application',
                'title'        => '✅ Dossier de candidature validé !',
                'message'      => 'Félicitations ! Votre dossier pour l\'appartement F3 Bonapriso a été validé. Procédez au paiement.',
                'detail'       => 'Prochaine étape : Paiement avance (3 mois) + caution (2 mois)',
                'icon'         => 'file-invoice',
                'icon_bg'      => 'bg-green-100',
                'icon_color'   => 'text-green-600',
                'action_label' => 'Payer maintenant',
                'action_link'  => '/locataire/detail-mon-bien',
                'is_read'      => true,
                'offset_hours' => 168,
            ],
            [
                'type'         => 'visit',
                'title'        => '📅 Visite confirmée par l\'agent',
                'message'      => 'Votre visite est confirmée le ' . now()->addDays(3)->format('d/m/Y') . ' à 10h00 avec Jean-Baptiste Mbarga.',
                'detail'       => 'N\'oubliez pas d\'apporter les 15 000 XAF de frais de visite en MoMo.',
                'icon'         => 'calendar-check',
                'icon_bg'      => 'bg-green-100',
                'icon_color'   => 'text-green-600',
                'action_label' => 'Voir mes locations',
                'action_link'  => '/locataire/mes-locations',
                'is_read'      => false,
                'offset_hours' => 12,
            ],
            [
                'type'         => 'system',
                'title'        => '🔧 Intervention terminée — Donnez une note',
                'message'      => 'L\'intervention de plomberie dans votre appartement est terminée. Notez le prestataire.',
                'detail'       => 'Prestataire : Jean-Paul Kamga • Durée : 2h • Prestation : Remplacement siphon',
                'icon'         => 'tools',
                'icon_bg'      => 'bg-blue-100',
                'icon_color'   => 'text-blue-600',
                'action_label' => 'Donner une note',
                'action_link'  => '/locataire/interventions',
                'is_read'      => false,
                'offset_hours' => 48,
            ],
            [
                'type'         => 'payment',
                'title'        => '⏰ Loyer de Mai 2026 — Rappel',
                'message'      => 'Le loyer de Mai 2026 (180 000 XAF) est dû dans 5 jours. Payez via MTN MoMo ou Orange Money.',
                'detail'       => 'Montant : 180 000 XAF • Échéance : le 1er Mai 2026',
                'icon'         => 'credit-card',
                'icon_bg'      => 'bg-orange-100',
                'icon_color'   => 'text-orange-600',
                'action_label' => 'Payer le loyer',
                'action_link'  => '/locataire/mes-paiements',
                'is_read'      => false,
                'offset_hours' => 1,
            ],
        ];

        foreach ($locataires as $locataire) {
            foreach ($locataireNotifs as $n) {
                Notification::create([
                    'user_id'      => $locataire->id,
                    'type'         => $n['type'],
                    'title'        => $n['title'],
                    'message'      => $n['message'],
                    'detail'       => $n['detail'],
                    'icon'         => $n['icon'],
                    'icon_bg'      => $n['icon_bg'],
                    'icon_color'   => $n['icon_color'],
                    'action_label' => $n['action_label'],
                    'action_link'  => $n['action_link'],
                    'is_read'      => $n['is_read'],
                    'created_at'   => now()->subHours($n['offset_hours']),
                    'updated_at'   => now()->subHours($n['offset_hours']),
                ]);
                $count++;
            }
        }

        // ─── CLIENTS ───────────────────────────────────────────────────────────
        $clientNotifs = [
            [
                'type'         => 'alert',
                'title'        => '🏠 Nouveau bien dans votre zone',
                'message'      => 'Un nouvel appartement F3 est disponible à Douala Bonapriso. 3 chambres, 110m², 180 000 XAF/mois.',
                'detail'       => 'Bien mis en ligne il y a 2h • 15 personnes l\'ont déjà vu',
                'icon'         => 'home',
                'icon_bg'      => 'bg-blue-100',
                'icon_color'   => 'text-blue-600',
                'action_label' => 'Voir le bien',
                'action_link'  => '/annonces',
                'is_read'      => false,
                'offset_hours' => 1,
            ],
            [
                'type'         => 'visit',
                'title'        => '📅 Rappel visite demain à 10h00',
                'message'      => 'Rappel : Visite demain à 10h00 pour "Appartement F3 — Bonapriso" avec Marie-Claire Ngo Biyong.',
                'detail'       => 'Prévoir les 15 000 XAF de frais de visite • Adresse communiquée par l\'agent',
                'icon'         => 'calendar-check',
                'icon_bg'      => 'bg-green-100',
                'icon_color'   => 'text-green-600',
                'action_label' => 'Voir mes demandes',
                'action_link'  => '/mes-demandes',
                'is_read'      => false,
                'offset_hours' => 3,
            ],
        ];

        foreach ($clients->take(3) as $client) {
            foreach ($clientNotifs as $n) {
                Notification::create([
                    'user_id'      => $client->id,
                    'type'         => $n['type'],
                    'title'        => $n['title'],
                    'message'      => $n['message'],
                    'detail'       => $n['detail'],
                    'icon'         => $n['icon'],
                    'icon_bg'      => $n['icon_bg'],
                    'icon_color'   => $n['icon_color'],
                    'action_label' => $n['action_label'],
                    'action_link'  => $n['action_link'],
                    'is_read'      => $n['is_read'],
                    'created_at'   => now()->subHours($n['offset_hours']),
                    'updated_at'   => now()->subHours($n['offset_hours']),
                ]);
                $count++;
            }
        }

        $this->command->info("✅ {$count} notifications réalistes créées !");
    }
}
