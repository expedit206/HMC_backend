<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Property;
use App\Models\PropertyReview;
use App\Models\User;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $properties = Property::all();

        if ($properties->isEmpty()) {
            $this->command->warn('⚠️  Aucune propriété trouvée pour les avis.');
            return;
        }

        // Récupérer les vrais utilisateurs
        $tenants = User::whereIn('role', ['locataire', 'client'])->get();
        if ($tenants->isEmpty()) {
            $this->command->warn('⚠️  Aucun locataire/client pour créer les avis.');
            return;
        }

        // Avis réalistes par ville — ciblés sur des propriétés existantes
        $reviewsData = [
            // Douala — Appartements
            [
                'title'       => 'Appartement idéal pour jeune actif',
                'comment'     => 'Je vis ici depuis 3 mois et je suis pleinement satisfait. L\'appartement est exactement comme sur les photos, le gardien est présent nuit et jour et la connexion Wi-Fi est stable. Le bailleur est très réactif en cas de problème.',
                'rating'      => 5,
                'city'        => 'Douala',
                'category'    => 'Appartement',
                'verified'    => true,
            ],
            [
                'title'       => 'Très bon emplacement, bien réaménagé',
                'comment'     => 'Très bon emplacement, proche de tout. La cuisine est bien équipée. Quelques petits détails à régler (un robinet qui gouttait) mais le propriétaire a envoyé le plombier en moins de 48h. Dans l\'ensemble très satisfait.',
                'rating'      => 4,
                'city'        => 'Douala',
                'category'    => 'Appartement',
                'verified'    => false,
            ],
            // Douala — Studios
            [
                'title'       => 'Studio parfait pour professionnel',
                'comment'     => 'Studio parfait pour jeune professionnel. Emplacement idéal à Bonanjo, proche du port et des bureaux. La clim fonctionne parfaitement, l\'eau n\'a jamais manqué. Rapport qualité-prix imbattable.',
                'rating'      => 5,
                'city'        => 'Douala',
                'category'    => 'Studio',
                'verified'    => true,
            ],
            // Douala — Chambre
            [
                'title'       => 'Chambre propre, eau stable',
                'comment'     => 'Chambre propre et bien entretenue. La distance avec le marché est parfaite. Eau et électricité très stables dans ce quartier. Je recommande pour les petits budgets sérieux.',
                'rating'      => 4,
                'city'        => 'Douala',
                'category'    => 'Chambre',
                'verified'    => false,
            ],
            // Yaoundé — Studios
            [
                'title'       => 'Quartier diplomatique, sécurité au top',
                'comment'     => 'Studio de luxe dans un quartier diplomatique. La sécurité est irréprochable, le voisinage est calme. La cuisine équipée m\'a permis de cuisiner dès le premier jour. Le gardiennage 24h/24 me rassure vraiment.',
                'rating'      => 5,
                'city'        => 'Yaoundé',
                'category'    => 'Studio',
                'verified'    => true,
            ],
            // Yaoundé — Appartements
            [
                'title'       => 'Groupe électrogène = tranquillité totale',
                'comment'     => 'Appartement bien situé à Omnisport avec vue sur le stade. Rénovation récente, carrelage neuf. Le groupe électrogène prend le relai automatiquement lors des coupures ENEO. Très appréciable.',
                'rating'      => 4,
                'city'        => 'Yaoundé',
                'category'    => 'Appartement',
                'verified'    => false,
            ],
            // Yaoundé — Chambre
            [
                'title'       => 'Parfait pour les études à l\'uni',
                'comment'     => 'Parfait pour les études. Calme, propre, accès cuisine partagée bien tenue. Proche de FMSB. Les colocataires sont respectueux. Je renouvelle pour ma 2ème année sans hésiter.',
                'rating'      => 5,
                'city'        => 'Yaoundé',
                'category'    => 'Chambre',
                'verified'    => true,
            ],
            // Bafoussam — Appartement
            [
                'title'       => 'Spacieux et bien sécurisé',
                'comment'     => 'Appartement F3 spacieux dans un quartier résidentiel de Bafoussam. La cour sécurisée avec parking est un vrai plus. Le propriétaire est disponible et à l\'écoute. Prix raisonnables pour la région Ouest.',
                'rating'      => 4,
                'city'        => 'Bafoussam',
                'category'    => 'Appartement',
                'verified'    => false,
            ],
            // Bafoussam — Maison
            [
                'title'       => 'Idéal pour famille, quartier calme',
                'comment'     => 'Grande maison familiale avec cour arborée. Idéal pour une famille avec enfants. Quartier Famla très calme, loin des axes bruyants. L\'école est à 10 minutes à pied. Excellente expérience avec HMC.',
                'rating'      => 5,
                'city'        => 'Bafoussam',
                'category'    => 'Maison',
                'verified'    => true,
            ],
            // Garoua — Villa
            [
                'title'       => 'Villa climatisée, indispensable ici',
                'comment'     => 'Villa entièrement climatisée à Garoua, indispensable avec la chaleur du Grand Nord ! Le groupe électrogène fonctionne automatiquement, le jardin est bien entretenu. Excellent rapport qualité-prix pour la région.',
                'rating'      => 5,
                'city'        => 'Garoua',
                'category'    => 'Villa',
                'verified'    => true,
            ],
            // Garoua — Appartement
            [
                'title'       => 'Bon appartement pour fonctionnaire muté',
                'comment'     => 'Appartement F3 bien climatisé sur le Plateau de Garoua. Eau courante stable, gardien sérieux. Proche de la préfecture et des banques. Je recommande pour les fonctionnaires mutés dans la région Nord.',
                'rating'      => 4,
                'city'        => 'Garoua',
                'category'    => 'Appartement',
                'verified'    => false,
            ],
            // Kribi — Villa
            [
                'title'       => 'Un rêve en bord de mer !',
                'comment'     => 'Villa bord de mer à Kribi... un rêve ! Se réveiller avec la vue sur l\'Atlantique, les cocotiers dans le jardin... La terrasse est immense. Idéal pour week-ends et vacances familiales. Je reviendrai !',
                'rating'      => 5,
                'city'        => 'Kribi',
                'category'    => 'Villa',
                'verified'    => true,
            ],
            // Limbe — Appartement
            [
                'title'       => 'Vue sur la baie, idéal pour expatriés',
                'comment'     => 'Appartement avec vue sur la baie de Limbe. Les chambres sont climatisées, la terrasse est magnifique. À deux pas de Down Beach et du Wildlife Centre. Idéal pour expatriés travaillant dans le secteur pétrolier.',
                'rating'      => 4,
                'city'        => 'Limbe',
                'category'    => 'Appartement',
                'verified'    => false,
            ],
        ];

        $usedCombinations = []; // Éviter les doublons [property_id + user_id]
        $count            = 0;
        $tenantPool       = $tenants->shuffle();

        foreach ($reviewsData as $index => $data) {
            // Chercher un bien correspondant
            $prop = $properties
                ->where('city', $data['city'])
                ->where('category', $data['category'])
                ->first();

            if (! $prop) {
                $prop = $properties->where('city', $data['city'])->first();
            }
            if (! $prop) {
                continue; // Pas de bien pour cette ville
            }

            // Choisir un reviewer différent pour chaque avis
            $tenant = $tenantPool[$index % $tenantPool->count()];

            // Vérifier unicité property_id + user_id
            $combo = $prop->id . '_' . $tenant->id;
            if (isset($usedCombinations[$combo])) {
                // Essayer un autre utilisateur
                foreach ($tenantPool as $alt) {
                    $altCombo = $prop->id . '_' . $alt->id;
                    if (! isset($usedCombinations[$altCombo])) {
                        $tenant = $alt;
                        $combo  = $altCombo;
                        break;
                    }
                }
                if (isset($usedCombinations[$combo])) {
                    continue; // tous pris pour ce bien, on skip
                }
            }
            $usedCombinations[$combo] = true;

            PropertyReview::create([
                'property_id'        => $prop->id,
                'user_id'            => $tenant->id,
                'rating'             => $data['rating'],
                'title'              => $data['title'],
                'comment'            => $data['comment'],
                'status'             => 'approved',
                'is_verified_tenant' => $data['verified'],
                'created_at'         => now()->subDays(rand(5, 120)),
                'updated_at'         => now()->subDays(rand(1, 4)),
            ]);
            $count++;
        }

        $this->command->info("✅ {$count} avis authentiques créés sur les propriétés !");
    }
}
