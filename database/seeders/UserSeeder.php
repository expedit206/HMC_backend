<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // ─── ADMIN ─────────────────────────────────────────────────────────────
        User::create([
            'name'              => 'HMC Administration',
            'email'             => 'admin@home.cm',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'),
            'role'              => 'admin',
            'roles'             => ['admin'],
            'phone'             => '+237 222 200 001',
            'city'              => 'Yaoundé',
            'bio'               => 'Équipe administrative de Home Cameroon. Supervision de la plateforme, validation des annonces et gestion des agents terrain.',
            'status'            => 'active',
            'remember_token'    => Str::random(10),
        ]);

        // ─── BAILLEURS ─────────────────────────────────────────────────────────
        $bailleurs = [
            [
                'name'   => 'Pierre Ndoumbé Ekwalla',
                'email'  => 'bailleur@home.cm',
                'phone'  => '+237 699 123 456',
                'city'   => 'Douala',
                'bio'    => 'Propriétaire de plusieurs biens résidentiels à Bonapriso et Bali. Investisseur immobilier depuis 2010.',
                'avatar' => 'https://i.pravatar.cc/150?img=68',
            ],
            [
                'name'   => 'Christiane Atangana Mbida',
                'email'  => 'bailleur2@home.cm',
                'phone'  => '+237 677 654 321',
                'city'   => 'Yaoundé',
                'bio'    => 'Propriétaire foncière à Bastos et Omnisport. Ancienne cadre bancaire reconvertie dans l\'immobilier haut standing.',
                'avatar' => 'https://i.pravatar.cc/150?img=48',
            ],
            [
                'name'   => 'Emmanuel Fotso Tagnong',
                'email'  => 'bailleur3@home.cm',
                'phone'  => '+237 690 789 012',
                'city'   => 'Bafoussam',
                'bio'    => 'Entrepreneur immobilier dans la région Ouest. Promoteur de logements accessibles pour les jeunes cadres.',
                'avatar' => 'https://i.pravatar.cc/150?img=57',
            ],
            [
                'name'   => 'Fadimatou Garba Hamidou',
                'email'  => 'bailleur4@home.cm',
                'phone'  => '+237 696 456 789',
                'city'   => 'Garoua',
                'bio'    => 'Première femme promotrice immobilière du Grand Nord. Propriétaire de villas haut standing à Garoua.',
                'avatar' => 'https://i.pravatar.cc/150?img=45',
            ],
            [
                'name'   => 'Rodrigue Nkomo Belinga',
                'email'  => 'bailleur5@home.cm',
                'phone'  => '+237 681 234 567',
                'city'   => 'Douala',
                'bio'    => 'Gestionnaire de biens locatifs à Makepe et Deido. Spécialiste des locations estudiantine et jeune actifs.',
                'avatar' => 'https://i.pravatar.cc/150?img=61',
            ],
            [
                'name'   => 'Sophie Bello Njoya',
                'email'  => 'bailleur6@home.cm',
                'phone'  => '+237 670 567 890',
                'city'   => 'Kribi',
                'bio'    => 'Propriétaire de biens touristiques en bord de mer à Kribi et Limbe. Spécialiste de la location saisonnière.',
                'avatar' => 'https://i.pravatar.cc/150?img=44',
            ],
        ];

        foreach ($bailleurs as $data) {
            User::create([
                'name'              => $data['name'],
                'email'             => $data['email'],
                'email_verified_at' => now(),
                'password'          => Hash::make('password'),
                'role'              => 'bailleur',
                'roles'             => ['bailleur'],
                'phone'             => $data['phone'],
                'city'              => $data['city'],
                'bio'               => $data['bio'],
                'avatar'            => $data['avatar'],
                'status'            => 'active',
                'remember_token'    => Str::random(10),
            ]);
        }

        // ─── AGENTS HMC ────────────────────────────────────────────────────────
        $agents = [
            [
                'name'   => 'Jean-Baptiste Mbarga Fouda',
                'email'  => 'agent@home.cm',
                'phone'  => '+237 699 001 001',
                'city'   => 'Yaoundé',
                'bio'    => 'Agent senior HMC, expert en immobilier résidentiel à Yaoundé depuis 8 ans. Certifié FIMAC.',
                'avatar' => 'https://i.pravatar.cc/150?img=11',
            ],
            [
                'name'   => 'Marie-Claire Ngo Biyong',
                'email'  => 'agent2@home.cm',
                'phone'  => '+237 677 002 002',
                'city'   => 'Douala',
                'bio'    => 'Spécialiste des biens de prestige à Bonanjo, Akwa et Bonapriso. Top agent HMC 2025.',
                'avatar' => 'https://i.pravatar.cc/150?img=21',
            ],
            [
                'name'   => 'Patrick Essomba Nkoa',
                'email'  => 'agent3@home.cm',
                'phone'  => '+237 690 003 003',
                'city'   => 'Bafoussam',
                'bio'    => 'Agent certifié HMC pour la région Ouest et Littoral. 6 ans d\'expérience sur le terrain.',
                'avatar' => 'https://i.pravatar.cc/150?img=33',
            ],
            [
                'name'   => 'Aïcha Aboubakar Waziri',
                'email'  => 'agent4@home.cm',
                'phone'  => '+237 696 004 004',
                'city'   => 'Garoua',
                'bio'    => 'Pionnière de l\'immobilier numérique dans le Grand Nord. Première agente HMC certifiée de la région.',
                'avatar' => 'https://i.pravatar.cc/150?img=47',
            ],
        ];

        foreach ($agents as $data) {
            User::create([
                'name'              => $data['name'],
                'email'             => $data['email'],
                'email_verified_at' => now(),
                'password'          => Hash::make('password'),
                'role'              => 'agent',
                'roles'             => ['agent'],
                'phone'             => $data['phone'],
                'city'              => $data['city'],
                'bio'               => $data['bio'],
                'avatar'            => $data['avatar'],
                'status'            => 'active',
                'remember_token'    => Str::random(10),
            ]);
        }

        // ─── LOCATAIRES ────────────────────────────────────────────────────────
        $locataires = [
            [
                'name'   => 'Kevin Essomba Onana',
                'email'  => 'locataire@home.cm',
                'phone'  => '+237 699 100 001',
                'city'   => 'Douala',
                'bio'    => 'Ingénieur pétrolier basé à Douala. Cherche des logements confortables proches du Port Autonome.',
                'avatar' => 'https://i.pravatar.cc/150?img=12',
            ],
            [
                'name'   => 'Flanelle Dongmo Kouam',
                'email'  => 'locataire2@home.cm',
                'phone'  => '+237 677 100 002',
                'city'   => 'Yaoundé',
                'bio'    => 'Conseillère juridique au Ministère des Finances, résidente à Bastos depuis 2 ans.',
                'avatar' => 'https://i.pravatar.cc/150?img=24',
            ],
            [
                'name'   => 'Ibrahim Moussa Bello',
                'email'  => 'locataire3@home.cm',
                'phone'  => '+237 696 100 003',
                'city'   => 'Garoua',
                'bio'    => 'Commerçant grossiste à Garoua. Cherche des espaces adaptés à sa vie professionnelle et familiale.',
                'avatar' => 'https://i.pravatar.cc/150?img=53',
            ],
            [
                'name'   => 'Nadège Nguele Tsague',
                'email'  => 'locataire4@home.cm',
                'phone'  => '+237 681 100 004',
                'city'   => 'Yaoundé',
                'bio'    => 'Étudiante en Médecine à l\'Université de Yaoundé I, cherche logement étudiant calme et abordable.',
                'avatar' => 'https://i.pravatar.cc/150?img=16',
            ],
        ];

        foreach ($locataires as $data) {
            User::create([
                'name'              => $data['name'],
                'email'             => $data['email'],
                'email_verified_at' => now(),
                'password'          => Hash::make('password'),
                'role'              => 'locataire',
                'roles'             => ['locataire'],
                'phone'             => $data['phone'],
                'city'              => $data['city'],
                'bio'               => $data['bio'],
                'avatar'            => $data['avatar'],
                'status'            => 'active',
                'remember_token'    => Str::random(10),
            ]);
        }

        // ─── CLIENTS / PROSPECTS ───────────────────────────────────────────────
        $clients = [
            [
                'name'   => 'Armand Tchatchou Ngang',
                'email'  => 'client@home.cm',
                'phone'  => '+237 699 200 001',
                'city'   => 'Douala',
                'bio'    => 'Cadre bancaire cherchant un appartement F3 dans un quartier calme de Douala pour sa famille de 3 personnes.',
                'avatar' => 'https://i.pravatar.cc/150?img=14',
            ],
            [
                'name'   => 'Rosine Mbang Abena',
                'email'  => 'client2@home.cm',
                'phone'  => '+237 677 200 002',
                'city'   => 'Yaoundé',
                'bio'    => 'Enseignante cherchant un studio meublé proche de l\'École Normale Supérieure de Yaoundé.',
                'avatar' => 'https://i.pravatar.cc/150?img=29',
            ],
            [
                'name'   => 'Sylvain Kamto Noumsi',
                'email'  => 'client3@home.cm',
                'phone'  => '+237 690 200 003',
                'city'   => 'Bafoussam',
                'bio'    => 'Entrepreneur en agro-alimentaire, cherche maison avec grande cour pour stocker ses équipements à Bafoussam.',
                'avatar' => 'https://i.pravatar.cc/150?img=55',
            ],
            [
                'name'   => 'Aimérance Yoyo Ebah',
                'email'  => 'client4@home.cm',
                'phone'  => '+237 670 200 004',
                'city'   => 'Douala',
                'bio'    => 'Jeune professionnelle expatriée de retour au Cameroun, cherche logement meublé haut standing à Douala.',
                'avatar' => 'https://i.pravatar.cc/150?img=46',
            ],
        ];

        foreach ($clients as $data) {
            User::create([
                'name'              => $data['name'],
                'email'             => $data['email'],
                'email_verified_at' => now(),
                'password'          => Hash::make('password'),
                'role'              => 'client',
                'roles'             => ['client'],
                'phone'             => $data['phone'],
                'city'              => $data['city'],
                'bio'               => $data['bio'],
                'avatar'            => $data['avatar'],
                'status'            => 'active',
                'remember_token'    => Str::random(10),
            ]);
        }

        $this->command->info('✅ Utilisateurs camerounais réalistes créés avec succès !');
    }
}
