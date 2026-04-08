<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.9.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.9.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-register">
                                <a href="#endpoints-POSTapi-register">POST api/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login">
                                <a href="#endpoints-POSTapi-login">POST api/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-properties">
                                <a href="#endpoints-GETapi-properties">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-properties--id-">
                                <a href="#endpoints-GETapi-properties--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-home">
                                <a href="#endpoints-GETapi-home">GET api/home</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-marketplace-items">
                                <a href="#endpoints-GETapi-marketplace-items">GET api/marketplace/items</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-marketplace-items--id-">
                                <a href="#endpoints-GETapi-marketplace-items--id-">GET api/marketplace/items/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-marketplace-categories">
                                <a href="#endpoints-GETapi-marketplace-categories">GET api/marketplace/categories</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-notchpay-callback">
                                <a href="#endpoints-GETapi-notchpay-callback">Gère le retour de NotchPay après une tentative de paiement (GET redirect)</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-notchpay-webhook">
                                <a href="#endpoints-POSTapi-notchpay-webhook">Gère les notifications asynchrones de NotchPay (POST Webhook)</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-transactions--reference--status">
                                <a href="#endpoints-GETapi-transactions--reference--status">Récupère le statut d'une transaction locale</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-logout">
                                <a href="#endpoints-POSTapi-logout">POST api/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-profile">
                                <a href="#endpoints-PUTapi-profile">Mettre à jour les informations de base du profil</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-profile-avatar">
                                <a href="#endpoints-POSTapi-profile-avatar">Mettre à jour l'avatar</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-profile-password">
                                <a href="#endpoints-POSTapi-profile-password">Changer le mot de passe</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-roles">
                                <a href="#endpoints-GETapi-roles">Get user roles.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-roles-switch">
                                <a href="#endpoints-POSTapi-roles-switch">Switch current active role.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-roles-acquire">
                                <a href="#endpoints-POSTapi-roles-acquire">Acquire a new role.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-properties">
                                <a href="#endpoints-POSTapi-properties">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-properties--id-">
                                <a href="#endpoints-PUTapi-properties--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-properties--id-">
                                <a href="#endpoints-DELETEapi-properties--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-visits">
                                <a href="#endpoints-GETapi-visits">Liste des visites de l'utilisateur connecté.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-visits">
                                <a href="#endpoints-POSTapi-visits">Réserver une visite.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-visits--id--confirm">
                                <a href="#endpoints-POSTapi-visits--id--confirm">L'utilisateur confirme que la visite a bien eu lieu (de son côté).</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-visits--id--cancel">
                                <a href="#endpoints-POSTapi-visits--id--cancel">Annuler une visite (par l'utilisateur).</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-rental-applications">
                                <a href="#endpoints-GETapi-rental-applications">Liste des dossiers de l'utilisateur connecté.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-rental-applications">
                                <a href="#endpoints-POSTapi-rental-applications">Soumettre un dossier de candidature.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-rental-applications--id-">
                                <a href="#endpoints-GETapi-rental-applications--id-">Détail d'un dossier.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-rental-applications--id--sign">
                                <a href="#endpoints-POSTapi-rental-applications--id--sign">L'utilisateur signe le contrat de bail pré-rempli.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-prospect-visits">
                                <a href="#endpoints-GETapi-prospect-visits">Lister les visites du prospect connecté.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-prospect-visits">
                                <a href="#endpoints-POSTapi-prospect-visits">Réserver une visite pour un bien.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-prospect-visits--id--pay">
                                <a href="#endpoints-POSTapi-prospect-visits--id--pay">Payer les frais de visite via NotchPay.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-prospect-visits--id--confirm">
                                <a href="#endpoints-POSTapi-prospect-visits--id--confirm">Confirmer la visite du côté du prospect (après que la visite a eu lieu).</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-prospect-visits--id--cancel">
                                <a href="#endpoints-POSTapi-prospect-visits--id--cancel">Annuler une visite (avant qu'elle ait lieu).</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-prospect-applications">
                                <a href="#endpoints-GETapi-prospect-applications">Lister tous les dossiers du prospect.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-prospect-applications">
                                <a href="#endpoints-POSTapi-prospect-applications">Créer un dossier de candidature (après visite confirmée).</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-prospect-applications--id-">
                                <a href="#endpoints-GETapi-prospect-applications--id-">Voir le détail de son dossier de candidature.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-prospect-applications--id-">
                                <a href="#endpoints-PUTapi-prospect-applications--id-">Mettre à jour son dossier (upload documents, signer contrat).</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-prospect-rentals">
                                <a href="#endpoints-GETapi-prospect-rentals">Voir tous ses contrats (locations).</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-prospect-rentals--id-">
                                <a href="#endpoints-GETapi-prospect-rentals--id-">Voir son contrat de location en cours (Phase 3).</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-prospect-rentals--id--pay-initial">
                                <a href="#endpoints-POSTapi-prospect-rentals--id--pay-initial">Effectuer/Signaler le paiement initial.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-bailleur-dashboard">
                                <a href="#endpoints-GETapi-bailleur-dashboard">Dashboard stats du bailleur connecté
GET /api/bailleur/dashboard</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-bailleur-properties">
                                <a href="#endpoints-GETapi-bailleur-properties">Liste complète des biens du bailleur (avec pagination)
GET /api/bailleur/properties</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-bailleur-profile">
                                <a href="#endpoints-GETapi-bailleur-profile">Profil du bailleur connecté
GET /api/bailleur/profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-bailleur-profile">
                                <a href="#endpoints-PUTapi-bailleur-profile">Mise à jour du profil
PUT /api/bailleur/profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-bailleur-visits">
                                <a href="#endpoints-GETapi-bailleur-visits">Liste des visites pour le bailleur — LECTURE SEULE (sans identité prospect).</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-bailleur-interventions">
                                <a href="#endpoints-GETapi-bailleur-interventions">Liste des interventions pour le bailleur</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-bailleur-interventions--id--status">
                                <a href="#endpoints-POSTapi-bailleur-interventions--id--status">Mettre à jour le statut d'une intervention</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-bailleur-finances">
                                <a href="#endpoints-GETapi-bailleur-finances">Rapport financier du bailleur
GET /api/bailleur/finances</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-bailleur-rentals">
                                <a href="#endpoints-POSTapi-bailleur-rentals">Create a new rental manualy by the landlord
POST /api/bailleur/rentals</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-bailleur-properties--id--rental-status">
                                <a href="#endpoints-GETapi-bailleur-properties--id--rental-status">Statut du processus locatif pour un bien donné — LECTURE SEULE.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-bailleur-publication-requests">
                                <a href="#endpoints-GETapi-bailleur-publication-requests">Mes demandes de publication (audit terrain)
GET /api/bailleur/publication-requests</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-bailleur-publication-requests">
                                <a href="#endpoints-POSTapi-bailleur-publication-requests">Soumettre une demande de publication (Phase 0 Audit)
POST /api/bailleur/publication-requests</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tenant-dashboard">
                                <a href="#endpoints-GETapi-tenant-dashboard">Dashboard Statistics</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tenant-rentals">
                                <a href="#endpoints-GETapi-tenant-rentals">List all rentals</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tenant-payments">
                                <a href="#endpoints-GETapi-tenant-payments">List all payments/transactions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tenant-interventions">
                                <a href="#endpoints-GETapi-tenant-interventions">Get list of interventions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tenant-favorites">
                                <a href="#endpoints-GETapi-tenant-favorites">Get list of favorites</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-tenant-favorites-toggle">
                                <a href="#endpoints-POSTapi-tenant-favorites-toggle">Toggle favorite</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-tenant-interventions">
                                <a href="#endpoints-POSTapi-tenant-interventions">Create a new intervention request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tenant-profile">
                                <a href="#endpoints-GETapi-tenant-profile">Get tenant profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-tenant-profile">
                                <a href="#endpoints-PUTapi-tenant-profile">Update tenant profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-tenant-book-visit">
                                <a href="#endpoints-POSTapi-tenant-book-visit">Book a property visit</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-tenant-apply">
                                <a href="#endpoints-POSTapi-tenant-apply">Apply for a rental</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-agent-dashboard">
                                <a href="#endpoints-GETapi-agent-dashboard">GET api/agent/dashboard</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-agent-properties">
                                <a href="#endpoints-GETapi-agent-properties">GET api/agent/properties</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-agent-clients">
                                <a href="#endpoints-GETapi-agent-clients">GET api/agent/clients</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-agent-missions">
                                <a href="#endpoints-GETapi-agent-missions">Missions de l'agent (toutes les actions en attente)</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-agent-agenda">
                                <a href="#endpoints-GETapi-agent-agenda">Agenda de l'agent (visites confirmées à venir)</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-agent-visits">
                                <a href="#endpoints-GETapi-agent-visits">GET api/agent/visits</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-agent-visits--id--confirm">
                                <a href="#endpoints-POSTapi-agent-visits--id--confirm">L'agent confirme la visite (de son côté).</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-agent-visits--id--cancel">
                                <a href="#endpoints-POSTapi-agent-visits--id--cancel">L'agent annule une visite.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-agent-applications">
                                <a href="#endpoints-GETapi-agent-applications">GET api/agent/applications</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-agent-applications--id-">
                                <a href="#endpoints-GETapi-agent-applications--id-">GET api/agent/applications/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-agent-applications--id--validate">
                                <a href="#endpoints-POSTapi-agent-applications--id--validate">L'agent valide le dossier → crée le Rental en attente de paiement.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-agent-applications--id--reject">
                                <a href="#endpoints-POSTapi-agent-applications--id--reject">L'agent rejette un dossier.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-agent-rentals">
                                <a href="#endpoints-GETapi-agent-rentals">GET api/agent/rentals</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-agent-rentals--id--confirm-payment">
                                <a href="#endpoints-POSTapi-agent-rentals--id--confirm-payment">L'agent confirme la réception du paiement initial → activation de la location.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-agent-formations">
                                <a href="#endpoints-GETapi-agent-formations">GET api/agent/formations</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-agent-publication-missions">
                                <a href="#endpoints-GETapi-agent-publication-missions">Liste des missions d'audit/publication assignées à l'agent</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-agent-publication-missions--id-">
                                <a href="#endpoints-GETapi-agent-publication-missions--id-">Détails d'une mission d'audit spécifique</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-agent-publication-missions--id--schedule">
                                <a href="#endpoints-POSTapi-agent-publication-missions--id--schedule">Programmer la date de visite/audit pour une mission.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-agent-publication-missions--id--complete">
                                <a href="#endpoints-POSTapi-agent-publication-missions--id--complete">Finaliser la publication d'un bien après audit terrain
POST /api/agent/publication-missions/{id}/complete</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-formations">
                                <a href="#endpoints-GETapi-formations">GET api/formations</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-formations--formation_id-">
                                <a href="#endpoints-GETapi-formations--formation_id-">GET api/formations/{formation_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-formations--formation_id--purchase">
                                <a href="#endpoints-POSTapi-formations--formation_id--purchase">POST api/formations/{formation_id}/purchase</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-prestataire-dashboard">
                                <a href="#endpoints-GETapi-prestataire-dashboard">Get dashboard data for the prestataire</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-prestataire-services">
                                <a href="#endpoints-GETapi-prestataire-services">List of services offered by the provider</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-prestataire-interventions">
                                <a href="#endpoints-GETapi-prestataire-interventions">List of interventions assigned to the provider</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-prestataire-agenda">
                                <a href="#endpoints-GETapi-prestataire-agenda">Upcoming interventions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-prestataire-finances">
                                <a href="#endpoints-GETapi-prestataire-finances">Earnings and transactions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-admin-dashboard">
                                <a href="#endpoints-GETapi-admin-dashboard">Global dashboard statistics</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-admin-users">
                                <a href="#endpoints-GETapi-admin-users">List all users</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-admin-users--user_id-">
                                <a href="#endpoints-PUTapi-admin-users--user_id-">Update user status (active/inactive)</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-admin-properties">
                                <a href="#endpoints-GETapi-admin-properties">List all properties</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-admin-properties--property_id-">
                                <a href="#endpoints-PUTapi-admin-properties--property_id-">Approve or reject a property</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-admin-finances">
                                <a href="#endpoints-GETapi-admin-finances">Financial reports</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-admin-services">
                                <a href="#endpoints-GETapi-admin-services">List all services and categories</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-admin-rental-stats">
                                <a href="#endpoints-GETapi-admin-rental-stats">KPIs de supervision des locations pour l'admin
GET /api/admin/rental-stats</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-admin-rental-procedures">
                                <a href="#endpoints-GETapi-admin-rental-procedures">Liste paginée de toutes les demandes de location (admin view)
GET /api/admin/rental-procedures</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-admin-rental-procedures--id-">
                                <a href="#endpoints-GETapi-admin-rental-procedures--id-">Détail complet d'une demande de location
GET /api/admin/rental-procedures/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-admin-rental-procedures--id--status">
                                <a href="#endpoints-POSTapi-admin-rental-procedures--id--status">Mettre à jour le statut d'une location (action admin)
POST /api/admin/rental-procedures/{id}/status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-admin-agents">
                                <a href="#endpoints-GETapi-admin-agents">List all users with 'agent' role</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-admin-properties--property_id--assign-agent">
                                <a href="#endpoints-POSTapi-admin-properties--property_id--assign-agent">Assign an agent to a property</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-admin-rental-procedures--visitId--assign-agent">
                                <a href="#endpoints-POSTapi-admin-rental-procedures--visitId--assign-agent">Assigner un agent à une visite (gardé pour compatibilité)
POST /api/admin/rental-procedures/{visitId}/assign-agent</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-admin-publication-requests">
                                <a href="#endpoints-GETapi-admin-publication-requests">Liste des demandes de publication des bailleurs
GET /api/admin/publication-requests</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-admin-publication-requests--id--assign">
                                <a href="#endpoints-POSTapi-admin-publication-requests--id--assign">Assigner un agent à une demande de publication
POST /api/admin/publication-requests/{id}/assign</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: March 27, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-register">POST api/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"password\": \"-0pBNvYgxw\",
    \"role\": \"client\",
    \"phone\": \"aykcmyuwpwlvqwrs\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "email": "zbailey@example.net",
    "password": "-0pBNvYgxw",
    "role": "client",
    "phone": "aykcmyuwpwlvqwrs"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-register"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-register"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-register"
               value="-0pBNvYgxw"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>-0pBNvYgxw</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="role"                data-endpoint="POSTapi-register"
               value="client"
               data-component="body">
    <br>
<p>Example: <code>client</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>client</code></li> <li><code>bailleur</code></li> <li><code>locataire</code></li> <li><code>prestataire</code></li> <li><code>agent</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-register"
               value="aykcmyuwpwlvqwrs"
               data-component="body">
    <br>
<p>Admin created manually. Must not be greater than 20 characters. Example: <code>aykcmyuwpwlvqwrs</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-login">POST api/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"password\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net",
    "password": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>gbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-properties">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-properties">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/properties" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/properties"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-properties">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 27,
                &quot;user_id&quot;: 2,
                &quot;agent_id&quot;: 7,
                &quot;title&quot;: &quot;Studio a bastos&quot;,
                &quot;slug&quot;: &quot;studio-a-bastos-FsvPo3&quot;,
                &quot;type&quot;: &quot;rent&quot;,
                &quot;category&quot;: &quot;Appartement&quot;,
                &quot;etat&quot;: &quot;R&eacute;nov&eacute;&quot;,
                &quot;amenities&quot;: [],
                &quot;status&quot;: &quot;active&quot;,
                &quot;price&quot;: &quot;60000.00&quot;,
                &quot;currency&quot;: &quot;XAF&quot;,
                &quot;description&quot;: &quot;2 chambre 1 salon avec 1 douche interne&quot;,
                &quot;location&quot;: &quot;Bastos Rue ambassade&quot;,
                &quot;city&quot;: &quot;Yaound&eacute;&quot;,
                &quot;region&quot;: null,
                &quot;features&quot;: [],
                &quot;bedrooms&quot;: 2,
                &quot;bathrooms&quot;: 2,
                &quot;area&quot;: &quot;1.00&quot;,
                &quot;construction_year&quot;: null,
                &quot;views_count&quot;: 5,
                &quot;created_at&quot;: &quot;2026-03-09T12:32:56.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-09T15:20:28.000000Z&quot;,
                &quot;image&quot;: &quot;http://localhost/storage/properties/py1ZAU0RAuQ6pLyWVtCzoGmW3m63MVlmnzA3xnbs.png&quot;,
                &quot;rooms&quot;: 2,
                &quot;owner&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Bailleur Test&quot;,
                    &quot;avatar&quot;: null,
                    &quot;avatar_url&quot;: &quot;http://localhost/images/avatar/default.png&quot;
                },
                &quot;is_favorite&quot;: false,
                &quot;my_rental_process&quot;: null,
                &quot;primary_image&quot;: {
                    &quot;id&quot;: 27,
                    &quot;property_id&quot;: 27,
                    &quot;path&quot;: &quot;properties/py1ZAU0RAuQ6pLyWVtCzoGmW3m63MVlmnzA3xnbs.png&quot;,
                    &quot;is_primary&quot;: 1,
                    &quot;order&quot;: 0,
                    &quot;created_at&quot;: &quot;2026-03-09T12:32:56.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-09T12:32:56.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;user_id&quot;: 6,
                &quot;agent_id&quot;: null,
                &quot;title&quot;: &quot;Chambre Meubl&eacute;e - Akwa, Douala&quot;,
                &quot;slug&quot;: &quot;chambre-meublee-akwa-douala-sucLU3&quot;,
                &quot;type&quot;: &quot;rent&quot;,
                &quot;category&quot;: &quot;Chambre&quot;,
                &quot;etat&quot;: &quot;Meubl&eacute;&quot;,
                &quot;amenities&quot;: [
                    &quot;Eau courante&quot;,
                    &quot;&Eacute;lectricit&eacute; permanente&quot;,
                    &quot;Gardiennage&quot;
                ],
                &quot;status&quot;: &quot;active&quot;,
                &quot;price&quot;: &quot;30000.00&quot;,
                &quot;currency&quot;: &quot;XAF&quot;,
                &quot;description&quot;: &quot;Chambre enti&egrave;rement meubl&eacute;e (lit, armoire, table) en plein c&oelig;ur d&#039;Akwa. Acc&egrave;s aux commerces, restaurants et transports en commun.&quot;,
                &quot;location&quot;: &quot;Akwa, Douala&quot;,
                &quot;city&quot;: &quot;Douala&quot;,
                &quot;region&quot;: &quot;Littoral&quot;,
                &quot;features&quot;: [
                    &quot;Eau courante&quot;,
                    &quot;&Eacute;lectricit&eacute; permanente&quot;,
                    &quot;Gardiennage&quot;
                ],
                &quot;bedrooms&quot;: 1,
                &quot;bathrooms&quot;: 1,
                &quot;area&quot;: &quot;18.00&quot;,
                &quot;construction_year&quot;: 2018,
                &quot;views_count&quot;: 28,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;image&quot;: &quot;https://images.unsplash.com/photo-1598928506311-c55ded91a20c?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;rooms&quot;: 1,
                &quot;owner&quot;: {
                    &quot;id&quot;: 6,
                    &quot;name&quot;: &quot;Marie-Claire Ngo Biyong&quot;,
                    &quot;avatar&quot;: &quot;https://i.pravatar.cc/150?img=21&quot;,
                    &quot;avatar_url&quot;: &quot;http://localhost/storage/https://i.pravatar.cc/150?img=21&quot;
                },
                &quot;is_favorite&quot;: false,
                &quot;my_rental_process&quot;: null,
                &quot;primary_image&quot;: {
                    &quot;id&quot;: 2,
                    &quot;property_id&quot;: 2,
                    &quot;path&quot;: &quot;https://images.unsplash.com/photo-1598928506311-c55ded91a20c?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                    &quot;is_primary&quot;: 1,
                    &quot;order&quot;: 0,
                    &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 3,
                &quot;user_id&quot;: 7,
                &quot;agent_id&quot;: null,
                &quot;title&quot;: &quot;Studio Haut Standing - Bonanjo, Douala&quot;,
                &quot;slug&quot;: &quot;studio-haut-standing-bonanjo-douala-cCXwol&quot;,
                &quot;type&quot;: &quot;rent&quot;,
                &quot;category&quot;: &quot;Studio&quot;,
                &quot;etat&quot;: &quot;Neuf&quot;,
                &quot;amenities&quot;: [
                    &quot;Climatisation&quot;,
                    &quot;Wi-Fi&quot;,
                    &quot;S&eacute;curit&eacute; 24/7&quot;,
                    &quot;Parking&quot;
                ],
                &quot;status&quot;: &quot;active&quot;,
                &quot;price&quot;: &quot;75000.00&quot;,
                &quot;currency&quot;: &quot;XAF&quot;,
                &quot;description&quot;: &quot;Studio neuf avec cuisine am&eacute;ricaine &eacute;quip&eacute;e &agrave; Bonanjo, quartier des affaires de Douala. Clim, Wi-Fi haut d&eacute;bit, s&eacute;curit&eacute; 24h/24.&quot;,
                &quot;location&quot;: &quot;Bonanjo, Douala&quot;,
                &quot;city&quot;: &quot;Douala&quot;,
                &quot;region&quot;: &quot;Littoral&quot;,
                &quot;features&quot;: [
                    &quot;Climatisation&quot;,
                    &quot;Wi-Fi&quot;,
                    &quot;S&eacute;curit&eacute; 24/7&quot;,
                    &quot;Parking&quot;
                ],
                &quot;bedrooms&quot;: 1,
                &quot;bathrooms&quot;: 1,
                &quot;area&quot;: &quot;40.00&quot;,
                &quot;construction_year&quot;: 2021,
                &quot;views_count&quot;: 758,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-09T17:19:34.000000Z&quot;,
                &quot;image&quot;: &quot;https://images.unsplash.com/photo-1493809842364-78817add7ffb?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;rooms&quot;: 1,
                &quot;owner&quot;: {
                    &quot;id&quot;: 7,
                    &quot;name&quot;: &quot;Patrick Essomba&quot;,
                    &quot;avatar&quot;: &quot;https://i.pravatar.cc/150?img=33&quot;,
                    &quot;avatar_url&quot;: &quot;http://localhost/storage/https://i.pravatar.cc/150?img=33&quot;
                },
                &quot;is_favorite&quot;: false,
                &quot;my_rental_process&quot;: null,
                &quot;primary_image&quot;: {
                    &quot;id&quot;: 3,
                    &quot;property_id&quot;: 3,
                    &quot;path&quot;: &quot;https://images.unsplash.com/photo-1493809842364-78817add7ffb?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                    &quot;is_primary&quot;: 1,
                    &quot;order&quot;: 0,
                    &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 4,
                &quot;user_id&quot;: 8,
                &quot;agent_id&quot;: null,
                &quot;title&quot;: &quot;Studio Climatis&eacute; 35m&sup2; - Deido, Douala&quot;,
                &quot;slug&quot;: &quot;studio-climatise-35m2-deido-douala-Ploj9B&quot;,
                &quot;type&quot;: &quot;rent&quot;,
                &quot;category&quot;: &quot;Studio&quot;,
                &quot;etat&quot;: &quot;R&eacute;nov&eacute;&quot;,
                &quot;amenities&quot;: [
                    &quot;Climatisation&quot;,
                    &quot;Eau courante&quot;,
                    &quot;&Eacute;lectricit&eacute; permanente&quot;
                ],
                &quot;status&quot;: &quot;active&quot;,
                &quot;price&quot;: &quot;55000.00&quot;,
                &quot;currency&quot;: &quot;XAF&quot;,
                &quot;description&quot;: &quot;Studio r&eacute;nov&eacute; et lumineux &agrave; Deido. Cuisine int&eacute;gr&eacute;e, salle d&#039;eau moderne. Proximit&eacute; du port de Douala.&quot;,
                &quot;location&quot;: &quot;Deido, Douala&quot;,
                &quot;city&quot;: &quot;Douala&quot;,
                &quot;region&quot;: &quot;Littoral&quot;,
                &quot;features&quot;: [
                    &quot;Climatisation&quot;,
                    &quot;Eau courante&quot;,
                    &quot;&Eacute;lectricit&eacute; permanente&quot;
                ],
                &quot;bedrooms&quot;: 1,
                &quot;bathrooms&quot;: 1,
                &quot;area&quot;: &quot;35.00&quot;,
                &quot;construction_year&quot;: 2015,
                &quot;views_count&quot;: 572,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;image&quot;: &quot;https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;rooms&quot;: 1,
                &quot;owner&quot;: {
                    &quot;id&quot;: 8,
                    &quot;name&quot;: &quot;A&iuml;cha Aboubakar&quot;,
                    &quot;avatar&quot;: &quot;https://i.pravatar.cc/150?img=47&quot;,
                    &quot;avatar_url&quot;: &quot;http://localhost/storage/https://i.pravatar.cc/150?img=47&quot;
                },
                &quot;is_favorite&quot;: false,
                &quot;my_rental_process&quot;: null,
                &quot;primary_image&quot;: {
                    &quot;id&quot;: 4,
                    &quot;property_id&quot;: 4,
                    &quot;path&quot;: &quot;https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                    &quot;is_primary&quot;: 1,
                    &quot;order&quot;: 0,
                    &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;user_id&quot;: 5,
                &quot;agent_id&quot;: null,
                &quot;title&quot;: &quot;Appartement F3 - Bonapriso, Douala&quot;,
                &quot;slug&quot;: &quot;appartement-f3-bonapriso-douala-mYGCiq&quot;,
                &quot;type&quot;: &quot;rent&quot;,
                &quot;category&quot;: &quot;Appartement&quot;,
                &quot;etat&quot;: &quot;Bon &eacute;tat&quot;,
                &quot;amenities&quot;: [
                    &quot;Climatisation&quot;,
                    &quot;Parking&quot;,
                    &quot;S&eacute;curit&eacute; 24/7&quot;,
                    &quot;Groupe &eacute;lectrog&egrave;ne&quot;,
                    &quot;Gardiennage&quot;
                ],
                &quot;status&quot;: &quot;active&quot;,
                &quot;price&quot;: &quot;180000.00&quot;,
                &quot;currency&quot;: &quot;XAF&quot;,
                &quot;description&quot;: &quot;Bel appartement F3 dans la r&eacute;sidence Le Palmier &agrave; Bonapriso. Standing &eacute;lev&eacute;, gardien, parking s&eacute;curis&eacute;. Quartier r&eacute;sidentiel pris&eacute;.&quot;,
                &quot;location&quot;: &quot;Bonapriso, Douala&quot;,
                &quot;city&quot;: &quot;Douala&quot;,
                &quot;region&quot;: &quot;Littoral&quot;,
                &quot;features&quot;: [
                    &quot;Climatisation&quot;,
                    &quot;Parking&quot;,
                    &quot;S&eacute;curit&eacute; 24/7&quot;,
                    &quot;Groupe &eacute;lectrog&egrave;ne&quot;,
                    &quot;Gardiennage&quot;
                ],
                &quot;bedrooms&quot;: 3,
                &quot;bathrooms&quot;: 2,
                &quot;area&quot;: &quot;110.00&quot;,
                &quot;construction_year&quot;: 2011,
                &quot;views_count&quot;: 754,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;image&quot;: &quot;https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;rooms&quot;: 3,
                &quot;owner&quot;: {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;Jean-Baptiste Mbarga&quot;,
                    &quot;avatar&quot;: &quot;https://i.pravatar.cc/150?img=11&quot;,
                    &quot;avatar_url&quot;: &quot;http://localhost/storage/https://i.pravatar.cc/150?img=11&quot;
                },
                &quot;is_favorite&quot;: false,
                &quot;my_rental_process&quot;: null,
                &quot;primary_image&quot;: {
                    &quot;id&quot;: 5,
                    &quot;property_id&quot;: 5,
                    &quot;path&quot;: &quot;https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                    &quot;is_primary&quot;: 1,
                    &quot;order&quot;: 0,
                    &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;user_id&quot;: 2,
                &quot;agent_id&quot;: null,
                &quot;title&quot;: &quot;Appartement F2 - Makepe, Douala&quot;,
                &quot;slug&quot;: &quot;appartement-f2-makepe-douala-ct92Po&quot;,
                &quot;type&quot;: &quot;rent&quot;,
                &quot;category&quot;: &quot;Appartement&quot;,
                &quot;etat&quot;: &quot;R&eacute;nov&eacute;&quot;,
                &quot;amenities&quot;: [
                    &quot;Eau courante&quot;,
                    &quot;&Eacute;lectricit&eacute; permanente&quot;,
                    &quot;Parking&quot;
                ],
                &quot;status&quot;: &quot;active&quot;,
                &quot;price&quot;: &quot;100000.00&quot;,
                &quot;currency&quot;: &quot;XAF&quot;,
                &quot;description&quot;: &quot;Appartement F2 enti&egrave;rement r&eacute;nov&eacute; &agrave; Makepe. Peinture fra&icirc;che, carrelage neuf, cuisine refaite. Acc&egrave;s facile depuis le boulevard...&quot;,
                &quot;location&quot;: &quot;Makepe, Douala&quot;,
                &quot;city&quot;: &quot;Douala&quot;,
                &quot;region&quot;: &quot;Littoral&quot;,
                &quot;features&quot;: [
                    &quot;Eau courante&quot;,
                    &quot;&Eacute;lectricit&eacute; permanente&quot;,
                    &quot;Parking&quot;
                ],
                &quot;bedrooms&quot;: 2,
                &quot;bathrooms&quot;: 1,
                &quot;area&quot;: &quot;75.00&quot;,
                &quot;construction_year&quot;: 2016,
                &quot;views_count&quot;: 226,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-09T16:08:00.000000Z&quot;,
                &quot;image&quot;: &quot;https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;rooms&quot;: 2,
                &quot;owner&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Bailleur Test&quot;,
                    &quot;avatar&quot;: null,
                    &quot;avatar_url&quot;: &quot;http://localhost/images/avatar/default.png&quot;
                },
                &quot;is_favorite&quot;: false,
                &quot;my_rental_process&quot;: null,
                &quot;primary_image&quot;: {
                    &quot;id&quot;: 6,
                    &quot;property_id&quot;: 6,
                    &quot;path&quot;: &quot;https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                    &quot;is_primary&quot;: 1,
                    &quot;order&quot;: 0,
                    &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 7,
                &quot;user_id&quot;: 6,
                &quot;agent_id&quot;: null,
                &quot;title&quot;: &quot;Appartement Meubl&eacute; - Bali, Douala&quot;,
                &quot;slug&quot;: &quot;appartement-meuble-bali-douala-JfHAo5&quot;,
                &quot;type&quot;: &quot;rent&quot;,
                &quot;category&quot;: &quot;Appartement&quot;,
                &quot;etat&quot;: &quot;Meubl&eacute;&quot;,
                &quot;amenities&quot;: [
                    &quot;Climatisation&quot;,
                    &quot;Wi-Fi&quot;,
                    &quot;Parking&quot;,
                    &quot;Balcon&quot;,
                    &quot;Cuisine &eacute;quip&eacute;e&quot;
                ],
                &quot;status&quot;: &quot;active&quot;,
                &quot;price&quot;: &quot;150000.00&quot;,
                &quot;currency&quot;: &quot;XAF&quot;,
                &quot;description&quot;: &quot;Appartement haut standing enti&egrave;rement meubl&eacute; &agrave; Bali. Cuisine &eacute;quip&eacute;e, deux salles de bain, balcon avec vue. Id&eacute;al pour expatri&eacute;s.&quot;,
                &quot;location&quot;: &quot;Bali, Douala&quot;,
                &quot;city&quot;: &quot;Douala&quot;,
                &quot;region&quot;: &quot;Littoral&quot;,
                &quot;features&quot;: [
                    &quot;Climatisation&quot;,
                    &quot;Wi-Fi&quot;,
                    &quot;Parking&quot;,
                    &quot;Balcon&quot;,
                    &quot;Cuisine &eacute;quip&eacute;e&quot;
                ],
                &quot;bedrooms&quot;: 2,
                &quot;bathrooms&quot;: 2,
                &quot;area&quot;: &quot;90.00&quot;,
                &quot;construction_year&quot;: 2015,
                &quot;views_count&quot;: 256,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-11T15:40:13.000000Z&quot;,
                &quot;image&quot;: &quot;https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;rooms&quot;: 2,
                &quot;owner&quot;: {
                    &quot;id&quot;: 6,
                    &quot;name&quot;: &quot;Marie-Claire Ngo Biyong&quot;,
                    &quot;avatar&quot;: &quot;https://i.pravatar.cc/150?img=21&quot;,
                    &quot;avatar_url&quot;: &quot;http://localhost/storage/https://i.pravatar.cc/150?img=21&quot;
                },
                &quot;is_favorite&quot;: false,
                &quot;my_rental_process&quot;: null,
                &quot;primary_image&quot;: {
                    &quot;id&quot;: 7,
                    &quot;property_id&quot;: 7,
                    &quot;path&quot;: &quot;https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                    &quot;is_primary&quot;: 1,
                    &quot;order&quot;: 0,
                    &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 8,
                &quot;user_id&quot;: 8,
                &quot;agent_id&quot;: null,
                &quot;title&quot;: &quot;Maison F4 avec Cour - Logbaba, Douala&quot;,
                &quot;slug&quot;: &quot;maison-f4-avec-cour-logbaba-douala-po7coc&quot;,
                &quot;type&quot;: &quot;rent&quot;,
                &quot;category&quot;: &quot;Maison&quot;,
                &quot;etat&quot;: &quot;Bon &eacute;tat&quot;,
                &quot;amenities&quot;: [
                    &quot;Eau courante&quot;,
                    &quot;&Eacute;lectricit&eacute; permanente&quot;,
                    &quot;Gardiennage&quot;,
                    &quot;Jardin&quot;,
                    &quot;Parking&quot;
                ],
                &quot;status&quot;: &quot;active&quot;,
                &quot;price&quot;: &quot;200000.00&quot;,
                &quot;currency&quot;: &quot;XAF&quot;,
                &quot;description&quot;: &quot;Grande maison familiale &agrave; Logbaba avec cour cl&ocirc;tur&eacute;e et jardin. 4 chambres, salon, cuisine moderne. Quartier s&eacute;curis&eacute; avec gardien.&quot;,
                &quot;location&quot;: &quot;Logbaba, Douala&quot;,
                &quot;city&quot;: &quot;Douala&quot;,
                &quot;region&quot;: &quot;Littoral&quot;,
                &quot;features&quot;: [
                    &quot;Eau courante&quot;,
                    &quot;&Eacute;lectricit&eacute; permanente&quot;,
                    &quot;Gardiennage&quot;,
                    &quot;Jardin&quot;,
                    &quot;Parking&quot;
                ],
                &quot;bedrooms&quot;: 4,
                &quot;bathrooms&quot;: 2,
                &quot;area&quot;: &quot;140.00&quot;,
                &quot;construction_year&quot;: 2013,
                &quot;views_count&quot;: 301,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;image&quot;: &quot;https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;rooms&quot;: 4,
                &quot;owner&quot;: {
                    &quot;id&quot;: 8,
                    &quot;name&quot;: &quot;A&iuml;cha Aboubakar&quot;,
                    &quot;avatar&quot;: &quot;https://i.pravatar.cc/150?img=47&quot;,
                    &quot;avatar_url&quot;: &quot;http://localhost/storage/https://i.pravatar.cc/150?img=47&quot;
                },
                &quot;is_favorite&quot;: false,
                &quot;my_rental_process&quot;: null,
                &quot;primary_image&quot;: {
                    &quot;id&quot;: 8,
                    &quot;property_id&quot;: 8,
                    &quot;path&quot;: &quot;https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                    &quot;is_primary&quot;: 1,
                    &quot;order&quot;: 0,
                    &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 9,
                &quot;user_id&quot;: 8,
                &quot;agent_id&quot;: null,
                &quot;title&quot;: &quot;Villa de Prestige - Bonapriso, Douala&quot;,
                &quot;slug&quot;: &quot;villa-de-prestige-bonapriso-douala-dFQv7z&quot;,
                &quot;type&quot;: &quot;rent&quot;,
                &quot;category&quot;: &quot;Villa&quot;,
                &quot;etat&quot;: &quot;Neuf&quot;,
                &quot;amenities&quot;: [
                    &quot;Climatisation&quot;,
                    &quot;Parking&quot;,
                    &quot;S&eacute;curit&eacute; 24/7&quot;,
                    &quot;Groupe &eacute;lectrog&egrave;ne&quot;,
                    &quot;Gardiennage&quot;,
                    &quot;Jardin&quot;,
                    &quot;Cuisine &eacute;quip&eacute;e&quot;
                ],
                &quot;status&quot;: &quot;active&quot;,
                &quot;price&quot;: &quot;650000.00&quot;,
                &quot;currency&quot;: &quot;XAF&quot;,
                &quot;description&quot;: &quot;Superbe villa neuve dans le quartier r&eacute;sidentiel de Bonapriso. 5 chambres dont suite parentale, piscine, jardin paysager, 2 parkings couverts.&quot;,
                &quot;location&quot;: &quot;Bonapriso, Douala&quot;,
                &quot;city&quot;: &quot;Douala&quot;,
                &quot;region&quot;: &quot;Littoral&quot;,
                &quot;features&quot;: [
                    &quot;Climatisation&quot;,
                    &quot;Parking&quot;,
                    &quot;S&eacute;curit&eacute; 24/7&quot;,
                    &quot;Groupe &eacute;lectrog&egrave;ne&quot;,
                    &quot;Gardiennage&quot;,
                    &quot;Jardin&quot;,
                    &quot;Cuisine &eacute;quip&eacute;e&quot;
                ],
                &quot;bedrooms&quot;: 5,
                &quot;bathrooms&quot;: 4,
                &quot;area&quot;: &quot;320.00&quot;,
                &quot;construction_year&quot;: 2010,
                &quot;views_count&quot;: 364,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;image&quot;: &quot;https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;rooms&quot;: 5,
                &quot;owner&quot;: {
                    &quot;id&quot;: 8,
                    &quot;name&quot;: &quot;A&iuml;cha Aboubakar&quot;,
                    &quot;avatar&quot;: &quot;https://i.pravatar.cc/150?img=47&quot;,
                    &quot;avatar_url&quot;: &quot;http://localhost/storage/https://i.pravatar.cc/150?img=47&quot;
                },
                &quot;is_favorite&quot;: false,
                &quot;my_rental_process&quot;: null,
                &quot;primary_image&quot;: {
                    &quot;id&quot;: 9,
                    &quot;property_id&quot;: 9,
                    &quot;path&quot;: &quot;https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                    &quot;is_primary&quot;: 1,
                    &quot;order&quot;: 0,
                    &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 10,
                &quot;user_id&quot;: 8,
                &quot;agent_id&quot;: null,
                &quot;title&quot;: &quot;Chambre Bon &eacute;tat - Mimboman, Yaound&eacute;&quot;,
                &quot;slug&quot;: &quot;chambre-bon-etat-mimboman-yaounde-IqcTrR&quot;,
                &quot;type&quot;: &quot;rent&quot;,
                &quot;category&quot;: &quot;Chambre&quot;,
                &quot;etat&quot;: &quot;Bon &eacute;tat&quot;,
                &quot;amenities&quot;: [
                    &quot;Eau courante&quot;,
                    &quot;&Eacute;lectricit&eacute; permanente&quot;
                ],
                &quot;status&quot;: &quot;active&quot;,
                &quot;price&quot;: &quot;20000.00&quot;,
                &quot;currency&quot;: &quot;XAF&quot;,
                &quot;description&quot;: &quot;Chambre propre et bien entretenue &agrave; Mimboman. Acc&egrave;s cuisine commune. Id&eacute;ale pour &eacute;tudiant, proche du campus de l&#039;Universit&eacute; de Yaound&eacute; I.&quot;,
                &quot;location&quot;: &quot;Mimboman, Yaound&eacute;&quot;,
                &quot;city&quot;: &quot;Yaound&eacute;&quot;,
                &quot;region&quot;: &quot;Centre&quot;,
                &quot;features&quot;: [
                    &quot;Eau courante&quot;,
                    &quot;&Eacute;lectricit&eacute; permanente&quot;
                ],
                &quot;bedrooms&quot;: 1,
                &quot;bathrooms&quot;: 1,
                &quot;area&quot;: &quot;14.00&quot;,
                &quot;construction_year&quot;: 2020,
                &quot;views_count&quot;: 714,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;image&quot;: &quot;https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;rooms&quot;: 1,
                &quot;owner&quot;: {
                    &quot;id&quot;: 8,
                    &quot;name&quot;: &quot;A&iuml;cha Aboubakar&quot;,
                    &quot;avatar&quot;: &quot;https://i.pravatar.cc/150?img=47&quot;,
                    &quot;avatar_url&quot;: &quot;http://localhost/storage/https://i.pravatar.cc/150?img=47&quot;
                },
                &quot;is_favorite&quot;: false,
                &quot;my_rental_process&quot;: null,
                &quot;primary_image&quot;: {
                    &quot;id&quot;: 10,
                    &quot;property_id&quot;: 10,
                    &quot;path&quot;: &quot;https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                    &quot;is_primary&quot;: 1,
                    &quot;order&quot;: 0,
                    &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 11,
                &quot;user_id&quot;: 5,
                &quot;agent_id&quot;: null,
                &quot;title&quot;: &quot;Studio Meubl&eacute; - Bastos, Yaound&eacute;&quot;,
                &quot;slug&quot;: &quot;studio-meuble-bastos-yaounde-spIseV&quot;,
                &quot;type&quot;: &quot;rent&quot;,
                &quot;category&quot;: &quot;Studio&quot;,
                &quot;etat&quot;: &quot;Meubl&eacute;&quot;,
                &quot;amenities&quot;: [
                    &quot;Climatisation&quot;,
                    &quot;Wi-Fi&quot;,
                    &quot;Parking&quot;,
                    &quot;S&eacute;curit&eacute; 24/7&quot;,
                    &quot;Cuisine &eacute;quip&eacute;e&quot;
                ],
                &quot;status&quot;: &quot;active&quot;,
                &quot;price&quot;: &quot;80000.00&quot;,
                &quot;currency&quot;: &quot;XAF&quot;,
                &quot;description&quot;: &quot;Studio de luxe meubl&eacute; dans la r&eacute;sidentielle Bastos (quartier des ambassades). Tout confort : clim, Wi-Fi fibre, cuisine &eacute;quip&eacute;e, parking.&quot;,
                &quot;location&quot;: &quot;Bastos, Yaound&eacute;&quot;,
                &quot;city&quot;: &quot;Yaound&eacute;&quot;,
                &quot;region&quot;: &quot;Centre&quot;,
                &quot;features&quot;: [
                    &quot;Climatisation&quot;,
                    &quot;Wi-Fi&quot;,
                    &quot;Parking&quot;,
                    &quot;S&eacute;curit&eacute; 24/7&quot;,
                    &quot;Cuisine &eacute;quip&eacute;e&quot;
                ],
                &quot;bedrooms&quot;: 1,
                &quot;bathrooms&quot;: 1,
                &quot;area&quot;: &quot;42.00&quot;,
                &quot;construction_year&quot;: 2023,
                &quot;views_count&quot;: 575,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;image&quot;: &quot;https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;rooms&quot;: 1,
                &quot;owner&quot;: {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;Jean-Baptiste Mbarga&quot;,
                    &quot;avatar&quot;: &quot;https://i.pravatar.cc/150?img=11&quot;,
                    &quot;avatar_url&quot;: &quot;http://localhost/storage/https://i.pravatar.cc/150?img=11&quot;
                },
                &quot;is_favorite&quot;: false,
                &quot;my_rental_process&quot;: null,
                &quot;primary_image&quot;: {
                    &quot;id&quot;: 11,
                    &quot;property_id&quot;: 11,
                    &quot;path&quot;: &quot;https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                    &quot;is_primary&quot;: 1,
                    &quot;order&quot;: 0,
                    &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 12,
                &quot;user_id&quot;: 2,
                &quot;agent_id&quot;: null,
                &quot;title&quot;: &quot;Appartement F3 - Omnisport, Yaound&eacute;&quot;,
                &quot;slug&quot;: &quot;appartement-f3-omnisport-yaounde-chj79X&quot;,
                &quot;type&quot;: &quot;rent&quot;,
                &quot;category&quot;: &quot;Appartement&quot;,
                &quot;etat&quot;: &quot;R&eacute;nov&eacute;&quot;,
                &quot;amenities&quot;: [
                    &quot;Groupe &eacute;lectrog&egrave;ne&quot;,
                    &quot;Gardiennage&quot;,
                    &quot;Eau courante&quot;,
                    &quot;&Eacute;lectricit&eacute; permanente&quot;
                ],
                &quot;status&quot;: &quot;active&quot;,
                &quot;price&quot;: &quot;130000.00&quot;,
                &quot;currency&quot;: &quot;XAF&quot;,
                &quot;description&quot;: &quot;Appartement F3 r&eacute;nov&eacute; &agrave; Omnisport, &agrave; 5 min du Palais des Sports. Carrelage neuf, peinture fra&icirc;che. R&eacute;sidence avec gardien et groupe &eacute;lectrog&egrave;ne.&quot;,
                &quot;location&quot;: &quot;Omnisport, Yaound&eacute;&quot;,
                &quot;city&quot;: &quot;Yaound&eacute;&quot;,
                &quot;region&quot;: &quot;Centre&quot;,
                &quot;features&quot;: [
                    &quot;Groupe &eacute;lectrog&egrave;ne&quot;,
                    &quot;Gardiennage&quot;,
                    &quot;Eau courante&quot;,
                    &quot;&Eacute;lectricit&eacute; permanente&quot;
                ],
                &quot;bedrooms&quot;: 3,
                &quot;bathrooms&quot;: 2,
                &quot;area&quot;: &quot;95.00&quot;,
                &quot;construction_year&quot;: 2018,
                &quot;views_count&quot;: 629,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;image&quot;: &quot;https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;rooms&quot;: 3,
                &quot;owner&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Bailleur Test&quot;,
                    &quot;avatar&quot;: null,
                    &quot;avatar_url&quot;: &quot;http://localhost/images/avatar/default.png&quot;
                },
                &quot;is_favorite&quot;: false,
                &quot;my_rental_process&quot;: null,
                &quot;primary_image&quot;: {
                    &quot;id&quot;: 12,
                    &quot;property_id&quot;: 12,
                    &quot;path&quot;: &quot;https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                    &quot;is_primary&quot;: 1,
                    &quot;order&quot;: 0,
                    &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 13,
                &quot;user_id&quot;: 2,
                &quot;agent_id&quot;: null,
                &quot;title&quot;: &quot;Appartement F2 - Biyem-Assi, Yaound&eacute;&quot;,
                &quot;slug&quot;: &quot;appartement-f2-biyem-assi-yaounde-tLcjh8&quot;,
                &quot;type&quot;: &quot;rent&quot;,
                &quot;category&quot;: &quot;Appartement&quot;,
                &quot;etat&quot;: &quot;Bon &eacute;tat&quot;,
                &quot;amenities&quot;: [
                    &quot;Eau courante&quot;,
                    &quot;&Eacute;lectricit&eacute; permanente&quot;,
                    &quot;Gardiennage&quot;
                ],
                &quot;status&quot;: &quot;active&quot;,
                &quot;price&quot;: &quot;90000.00&quot;,
                &quot;currency&quot;: &quot;XAF&quot;,
                &quot;description&quot;: &quot;Appartement F2 bien situ&eacute; &agrave; Biyem-Assi. Proche du march&eacute;, des &eacute;coles et pharmacies. Gardien en journ&eacute;e, eau et &eacute;lectricit&eacute; stables.&quot;,
                &quot;location&quot;: &quot;Biyem-Assi, Yaound&eacute;&quot;,
                &quot;city&quot;: &quot;Yaound&eacute;&quot;,
                &quot;region&quot;: &quot;Centre&quot;,
                &quot;features&quot;: [
                    &quot;Eau courante&quot;,
                    &quot;&Eacute;lectricit&eacute; permanente&quot;,
                    &quot;Gardiennage&quot;
                ],
                &quot;bedrooms&quot;: 2,
                &quot;bathrooms&quot;: 1,
                &quot;area&quot;: &quot;70.00&quot;,
                &quot;construction_year&quot;: 2016,
                &quot;views_count&quot;: 262,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;image&quot;: &quot;https://images.unsplash.com/photo-1516455590571-18256e5bb9ff?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;rooms&quot;: 2,
                &quot;owner&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Bailleur Test&quot;,
                    &quot;avatar&quot;: null,
                    &quot;avatar_url&quot;: &quot;http://localhost/images/avatar/default.png&quot;
                },
                &quot;is_favorite&quot;: false,
                &quot;my_rental_process&quot;: null,
                &quot;primary_image&quot;: {
                    &quot;id&quot;: 13,
                    &quot;property_id&quot;: 13,
                    &quot;path&quot;: &quot;https://images.unsplash.com/photo-1516455590571-18256e5bb9ff?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                    &quot;is_primary&quot;: 1,
                    &quot;order&quot;: 0,
                    &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 14,
                &quot;user_id&quot;: 7,
                &quot;agent_id&quot;: null,
                &quot;title&quot;: &quot;Maison F5 Cl&ocirc;tur&eacute;e - Nsimeyong, Yaound&eacute;&quot;,
                &quot;slug&quot;: &quot;maison-f5-cloturee-nsimeyong-yaounde-FOD2nl&quot;,
                &quot;type&quot;: &quot;rent&quot;,
                &quot;category&quot;: &quot;Maison&quot;,
                &quot;etat&quot;: &quot;Bon &eacute;tat&quot;,
                &quot;amenities&quot;: [
                    &quot;Eau courante&quot;,
                    &quot;&Eacute;lectricit&eacute; permanente&quot;,
                    &quot;Jardin&quot;,
                    &quot;Parking&quot;,
                    &quot;Gardiennage&quot;
                ],
                &quot;status&quot;: &quot;active&quot;,
                &quot;price&quot;: &quot;250000.00&quot;,
                &quot;currency&quot;: &quot;XAF&quot;,
                &quot;description&quot;: &quot;Belle maison familiale &agrave; Nsimeyong avec grand s&eacute;jour, 5 chambres, 3 douches et grande cour cl&ocirc;tur&eacute;e. Quartier calme, id&eacute;al pour expatri&eacute;s.&quot;,
                &quot;location&quot;: &quot;Nsimeyong, Yaound&eacute;&quot;,
                &quot;city&quot;: &quot;Yaound&eacute;&quot;,
                &quot;region&quot;: &quot;Centre&quot;,
                &quot;features&quot;: [
                    &quot;Eau courante&quot;,
                    &quot;&Eacute;lectricit&eacute; permanente&quot;,
                    &quot;Jardin&quot;,
                    &quot;Parking&quot;,
                    &quot;Gardiennage&quot;
                ],
                &quot;bedrooms&quot;: 5,
                &quot;bathrooms&quot;: 3,
                &quot;area&quot;: &quot;180.00&quot;,
                &quot;construction_year&quot;: 2024,
                &quot;views_count&quot;: 216,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;image&quot;: &quot;https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;rooms&quot;: 5,
                &quot;owner&quot;: {
                    &quot;id&quot;: 7,
                    &quot;name&quot;: &quot;Patrick Essomba&quot;,
                    &quot;avatar&quot;: &quot;https://i.pravatar.cc/150?img=33&quot;,
                    &quot;avatar_url&quot;: &quot;http://localhost/storage/https://i.pravatar.cc/150?img=33&quot;
                },
                &quot;is_favorite&quot;: false,
                &quot;my_rental_process&quot;: null,
                &quot;primary_image&quot;: {
                    &quot;id&quot;: 14,
                    &quot;property_id&quot;: 14,
                    &quot;path&quot;: &quot;https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                    &quot;is_primary&quot;: 1,
                    &quot;order&quot;: 0,
                    &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 15,
                &quot;user_id&quot;: 5,
                &quot;agent_id&quot;: null,
                &quot;title&quot;: &quot;Villa Standing 4 Ch. - Bastos, Yaound&eacute;&quot;,
                &quot;slug&quot;: &quot;villa-standing-4-ch-bastos-yaounde-Jju7lY&quot;,
                &quot;type&quot;: &quot;rent&quot;,
                &quot;category&quot;: &quot;Villa&quot;,
                &quot;etat&quot;: &quot;Neuf&quot;,
                &quot;amenities&quot;: [
                    &quot;Climatisation&quot;,
                    &quot;Parking&quot;,
                    &quot;S&eacute;curit&eacute; 24/7&quot;,
                    &quot;Groupe &eacute;lectrog&egrave;ne&quot;,
                    &quot;Gardiennage&quot;,
                    &quot;Jardin&quot;,
                    &quot;Balcon&quot;
                ],
                &quot;status&quot;: &quot;active&quot;,
                &quot;price&quot;: &quot;750000.00&quot;,
                &quot;currency&quot;: &quot;XAF&quot;,
                &quot;description&quot;: &quot;Villa haut standing &agrave; Bastos (quartier diplomatique). 4 chambres, salon avec vue, terrasse, jardin arboris&eacute;, groupe &eacute;lectrog&egrave;ne 25KVA, s&eacute;curit&eacute;.&quot;,
                &quot;location&quot;: &quot;Bastos, Yaound&eacute;&quot;,
                &quot;city&quot;: &quot;Yaound&eacute;&quot;,
                &quot;region&quot;: &quot;Centre&quot;,
                &quot;features&quot;: [
                    &quot;Climatisation&quot;,
                    &quot;Parking&quot;,
                    &quot;S&eacute;curit&eacute; 24/7&quot;,
                    &quot;Groupe &eacute;lectrog&egrave;ne&quot;,
                    &quot;Gardiennage&quot;,
                    &quot;Jardin&quot;,
                    &quot;Balcon&quot;
                ],
                &quot;bedrooms&quot;: 4,
                &quot;bathrooms&quot;: 3,
                &quot;area&quot;: &quot;280.00&quot;,
                &quot;construction_year&quot;: 2021,
                &quot;views_count&quot;: 105,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;image&quot;: &quot;https://images.unsplash.com/photo-1605276374104-dee2a0ed3cd6?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;rooms&quot;: 4,
                &quot;owner&quot;: {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;Jean-Baptiste Mbarga&quot;,
                    &quot;avatar&quot;: &quot;https://i.pravatar.cc/150?img=11&quot;,
                    &quot;avatar_url&quot;: &quot;http://localhost/storage/https://i.pravatar.cc/150?img=11&quot;
                },
                &quot;is_favorite&quot;: false,
                &quot;my_rental_process&quot;: null,
                &quot;primary_image&quot;: {
                    &quot;id&quot;: 15,
                    &quot;property_id&quot;: 15,
                    &quot;path&quot;: &quot;https://images.unsplash.com/photo-1605276374104-dee2a0ed3cd6?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                    &quot;is_primary&quot;: 1,
                    &quot;order&quot;: 0,
                    &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
                }
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost/api/properties?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;last_page_url&quot;: &quot;http://localhost/api/properties?page=2&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/properties?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/properties?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/properties?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: &quot;http://localhost/api/properties?page=2&quot;,
        &quot;path&quot;: &quot;http://localhost/api/properties&quot;,
        &quot;per_page&quot;: 15,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 15,
        &quot;total&quot;: 26
    },
    &quot;aggregates&quot;: {
        &quot;types&quot;: [
            {
                &quot;label&quot;: &quot;Appartement&quot;,
                &quot;value&quot;: &quot;Appartement&quot;,
                &quot;count&quot;: 11
            },
            {
                &quot;label&quot;: &quot;Studio&quot;,
                &quot;value&quot;: &quot;Studio&quot;,
                &quot;count&quot;: 5
            },
            {
                &quot;label&quot;: &quot;Villa&quot;,
                &quot;value&quot;: &quot;Villa&quot;,
                &quot;count&quot;: 4
            },
            {
                &quot;label&quot;: &quot;Chambre&quot;,
                &quot;value&quot;: &quot;Chambre&quot;,
                &quot;count&quot;: 3
            },
            {
                &quot;label&quot;: &quot;Maison&quot;,
                &quot;value&quot;: &quot;Maison&quot;,
                &quot;count&quot;: 3
            }
        ],
        &quot;cities&quot;: [
            {
                &quot;label&quot;: &quot;Douala&quot;,
                &quot;value&quot;: &quot;Douala&quot;,
                &quot;count&quot;: 8
            },
            {
                &quot;label&quot;: &quot;Yaound&eacute;&quot;,
                &quot;value&quot;: &quot;Yaound&eacute;&quot;,
                &quot;count&quot;: 8
            },
            {
                &quot;label&quot;: &quot;Bafoussam&quot;,
                &quot;value&quot;: &quot;Bafoussam&quot;,
                &quot;count&quot;: 4
            },
            {
                &quot;label&quot;: &quot;Bamenda&quot;,
                &quot;value&quot;: &quot;Bamenda&quot;,
                &quot;count&quot;: 2
            },
            {
                &quot;label&quot;: &quot;Garoua&quot;,
                &quot;value&quot;: &quot;Garoua&quot;,
                &quot;count&quot;: 2
            },
            {
                &quot;label&quot;: &quot;Kribi&quot;,
                &quot;value&quot;: &quot;Kribi&quot;,
                &quot;count&quot;: 1
            },
            {
                &quot;label&quot;: &quot;Limbe&quot;,
                &quot;value&quot;: &quot;Limbe&quot;,
                &quot;count&quot;: 1
            }
        ],
        &quot;etats&quot;: [
            {
                &quot;label&quot;: &quot;Meubl&eacute;&quot;,
                &quot;value&quot;: &quot;Meubl&eacute;&quot;,
                &quot;count&quot;: 5
            },
            {
                &quot;label&quot;: &quot;Neuf&quot;,
                &quot;value&quot;: &quot;Neuf&quot;,
                &quot;count&quot;: 4
            },
            {
                &quot;label&quot;: &quot;R&eacute;nov&eacute;&quot;,
                &quot;value&quot;: &quot;R&eacute;nov&eacute;&quot;,
                &quot;count&quot;: 5
            },
            {
                &quot;label&quot;: &quot;Bon &eacute;tat&quot;,
                &quot;value&quot;: &quot;Bon &eacute;tat&quot;,
                &quot;count&quot;: 12
            }
        ],
        &quot;amenities&quot;: [
            {
                &quot;label&quot;: &quot;Climatisation&quot;,
                &quot;value&quot;: &quot;Climatisation&quot;,
                &quot;count&quot;: 12
            },
            {
                &quot;label&quot;: &quot;Parking&quot;,
                &quot;value&quot;: &quot;Parking&quot;,
                &quot;count&quot;: 17
            },
            {
                &quot;label&quot;: &quot;S&eacute;curit&eacute; 24/7&quot;,
                &quot;value&quot;: &quot;S&eacute;curit&eacute; 24/7&quot;,
                &quot;count&quot;: 7
            },
            {
                &quot;label&quot;: &quot;Wi-Fi&quot;,
                &quot;value&quot;: &quot;Wi-Fi&quot;,
                &quot;count&quot;: 4
            },
            {
                &quot;label&quot;: &quot;Eau courante&quot;,
                &quot;value&quot;: &quot;Eau courante&quot;,
                &quot;count&quot;: 17
            },
            {
                &quot;label&quot;: &quot;&Eacute;lectricit&eacute; permanente&quot;,
                &quot;value&quot;: &quot;&Eacute;lectricit&eacute; permanente&quot;,
                &quot;count&quot;: 15
            },
            {
                &quot;label&quot;: &quot;Gardiennage&quot;,
                &quot;value&quot;: &quot;Gardiennage&quot;,
                &quot;count&quot;: 11
            },
            {
                &quot;label&quot;: &quot;Groupe &eacute;lectrog&egrave;ne&quot;,
                &quot;value&quot;: &quot;Groupe &eacute;lectrog&egrave;ne&quot;,
                &quot;count&quot;: 7
            },
            {
                &quot;label&quot;: &quot;Balcon&quot;,
                &quot;value&quot;: &quot;Balcon&quot;,
                &quot;count&quot;: 4
            },
            {
                &quot;label&quot;: &quot;Jardin&quot;,
                &quot;value&quot;: &quot;Jardin&quot;,
                &quot;count&quot;: 7
            },
            {
                &quot;label&quot;: &quot;Cuisine &eacute;quip&eacute;e&quot;,
                &quot;value&quot;: &quot;Cuisine &eacute;quip&eacute;e&quot;,
                &quot;count&quot;: 4
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-properties" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-properties"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-properties"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-properties" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-properties">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-properties" data-method="GET"
      data-path="api/properties"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-properties', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-properties"
                    onclick="tryItOut('GETapi-properties');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-properties"
                    onclick="cancelTryOut('GETapi-properties');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-properties"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/properties</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-properties"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-properties"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-properties--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-properties--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/properties/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/properties/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-properties--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;user_id&quot;: 7,
        &quot;agent_id&quot;: null,
        &quot;title&quot;: &quot;Chambre Moderne - Makepe, Douala&quot;,
        &quot;slug&quot;: &quot;chambre-moderne-makepe-douala-0oI2aO&quot;,
        &quot;type&quot;: &quot;rent&quot;,
        &quot;category&quot;: &quot;Chambre&quot;,
        &quot;etat&quot;: &quot;Bon &eacute;tat&quot;,
        &quot;amenities&quot;: [
            &quot;Eau courante&quot;,
            &quot;&Eacute;lectricit&eacute; permanente&quot;,
            &quot;Wi-Fi&quot;
        ],
        &quot;status&quot;: &quot;rented&quot;,
        &quot;price&quot;: &quot;25000.00&quot;,
        &quot;currency&quot;: &quot;XAF&quot;,
        &quot;description&quot;: &quot;Belle chambre meubl&eacute;e dans un appartement partag&eacute; &agrave; Makepe. Quartier calme et s&eacute;curis&eacute;, proche de l&#039;Universit&eacute; de Douala. Eau et &eacute;lectricit&eacute; incluses.&quot;,
        &quot;location&quot;: &quot;Makepe, Douala&quot;,
        &quot;city&quot;: &quot;Douala&quot;,
        &quot;region&quot;: &quot;Littoral&quot;,
        &quot;features&quot;: [
            &quot;Eau courante&quot;,
            &quot;&Eacute;lectricit&eacute; permanente&quot;,
            &quot;Wi-Fi&quot;
        ],
        &quot;bedrooms&quot;: 1,
        &quot;bathrooms&quot;: 1,
        &quot;area&quot;: &quot;15.00&quot;,
        &quot;construction_year&quot;: 2021,
        &quot;views_count&quot;: 415,
        &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-10T14:15:16.000000Z&quot;,
        &quot;image&quot;: &quot;https://images.unsplash.com/photo-1598928506311-c55ded91a20c?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
        &quot;all_images&quot;: [
            &quot;https://images.unsplash.com/photo-1598928506311-c55ded91a20c?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;
        ],
        &quot;is_favorite&quot;: false,
        &quot;my_rental_process&quot;: null,
        &quot;owner&quot;: {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;Patrick Essomba&quot;,
            &quot;email&quot;: &quot;agent3@home.cm&quot;,
            &quot;avatar&quot;: &quot;https://i.pravatar.cc/150?img=33&quot;,
            &quot;phone&quot;: null,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/https://i.pravatar.cc/150?img=33&quot;
        },
        &quot;images&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;property_id&quot;: 1,
                &quot;path&quot;: &quot;https://images.unsplash.com/photo-1598928506311-c55ded91a20c?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;is_primary&quot;: 1,
                &quot;order&quot;: 0,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
            }
        ]
    },
    &quot;similar&quot;: [
        {
            &quot;id&quot;: 5,
            &quot;user_id&quot;: 5,
            &quot;agent_id&quot;: null,
            &quot;title&quot;: &quot;Appartement F3 - Bonapriso, Douala&quot;,
            &quot;slug&quot;: &quot;appartement-f3-bonapriso-douala-mYGCiq&quot;,
            &quot;type&quot;: &quot;rent&quot;,
            &quot;category&quot;: &quot;Appartement&quot;,
            &quot;etat&quot;: &quot;Bon &eacute;tat&quot;,
            &quot;amenities&quot;: [
                &quot;Climatisation&quot;,
                &quot;Parking&quot;,
                &quot;S&eacute;curit&eacute; 24/7&quot;,
                &quot;Groupe &eacute;lectrog&egrave;ne&quot;,
                &quot;Gardiennage&quot;
            ],
            &quot;status&quot;: &quot;active&quot;,
            &quot;price&quot;: &quot;180000.00&quot;,
            &quot;currency&quot;: &quot;XAF&quot;,
            &quot;description&quot;: &quot;Bel appartement F3 dans la r&eacute;sidence Le Palmier &agrave; Bonapriso. Standing &eacute;lev&eacute;, gardien, parking s&eacute;curis&eacute;. Quartier r&eacute;sidentiel pris&eacute;.&quot;,
            &quot;location&quot;: &quot;Bonapriso, Douala&quot;,
            &quot;city&quot;: &quot;Douala&quot;,
            &quot;region&quot;: &quot;Littoral&quot;,
            &quot;features&quot;: [
                &quot;Climatisation&quot;,
                &quot;Parking&quot;,
                &quot;S&eacute;curit&eacute; 24/7&quot;,
                &quot;Groupe &eacute;lectrog&egrave;ne&quot;,
                &quot;Gardiennage&quot;
            ],
            &quot;bedrooms&quot;: 3,
            &quot;bathrooms&quot;: 2,
            &quot;area&quot;: &quot;110.00&quot;,
            &quot;construction_year&quot;: 2011,
            &quot;views_count&quot;: 754,
            &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
            &quot;image&quot;: &quot;https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
            &quot;rooms&quot;: 3,
            &quot;is_favorite&quot;: false,
            &quot;primary_image&quot;: {
                &quot;id&quot;: 5,
                &quot;property_id&quot;: 5,
                &quot;path&quot;: &quot;https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;is_primary&quot;: 1,
                &quot;order&quot;: 0,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
            }
        },
        {
            &quot;id&quot;: 10,
            &quot;user_id&quot;: 8,
            &quot;agent_id&quot;: null,
            &quot;title&quot;: &quot;Chambre Bon &eacute;tat - Mimboman, Yaound&eacute;&quot;,
            &quot;slug&quot;: &quot;chambre-bon-etat-mimboman-yaounde-IqcTrR&quot;,
            &quot;type&quot;: &quot;rent&quot;,
            &quot;category&quot;: &quot;Chambre&quot;,
            &quot;etat&quot;: &quot;Bon &eacute;tat&quot;,
            &quot;amenities&quot;: [
                &quot;Eau courante&quot;,
                &quot;&Eacute;lectricit&eacute; permanente&quot;
            ],
            &quot;status&quot;: &quot;active&quot;,
            &quot;price&quot;: &quot;20000.00&quot;,
            &quot;currency&quot;: &quot;XAF&quot;,
            &quot;description&quot;: &quot;Chambre propre et bien entretenue &agrave; Mimboman. Acc&egrave;s cuisine commune. Id&eacute;ale pour &eacute;tudiant, proche du campus de l&#039;Universit&eacute; de Yaound&eacute; I.&quot;,
            &quot;location&quot;: &quot;Mimboman, Yaound&eacute;&quot;,
            &quot;city&quot;: &quot;Yaound&eacute;&quot;,
            &quot;region&quot;: &quot;Centre&quot;,
            &quot;features&quot;: [
                &quot;Eau courante&quot;,
                &quot;&Eacute;lectricit&eacute; permanente&quot;
            ],
            &quot;bedrooms&quot;: 1,
            &quot;bathrooms&quot;: 1,
            &quot;area&quot;: &quot;14.00&quot;,
            &quot;construction_year&quot;: 2020,
            &quot;views_count&quot;: 714,
            &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
            &quot;image&quot;: &quot;https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
            &quot;rooms&quot;: 1,
            &quot;is_favorite&quot;: false,
            &quot;primary_image&quot;: {
                &quot;id&quot;: 10,
                &quot;property_id&quot;: 10,
                &quot;path&quot;: &quot;https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;is_primary&quot;: 1,
                &quot;order&quot;: 0,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
            }
        },
        {
            &quot;id&quot;: 7,
            &quot;user_id&quot;: 6,
            &quot;agent_id&quot;: null,
            &quot;title&quot;: &quot;Appartement Meubl&eacute; - Bali, Douala&quot;,
            &quot;slug&quot;: &quot;appartement-meuble-bali-douala-JfHAo5&quot;,
            &quot;type&quot;: &quot;rent&quot;,
            &quot;category&quot;: &quot;Appartement&quot;,
            &quot;etat&quot;: &quot;Meubl&eacute;&quot;,
            &quot;amenities&quot;: [
                &quot;Climatisation&quot;,
                &quot;Wi-Fi&quot;,
                &quot;Parking&quot;,
                &quot;Balcon&quot;,
                &quot;Cuisine &eacute;quip&eacute;e&quot;
            ],
            &quot;status&quot;: &quot;active&quot;,
            &quot;price&quot;: &quot;150000.00&quot;,
            &quot;currency&quot;: &quot;XAF&quot;,
            &quot;description&quot;: &quot;Appartement haut standing enti&egrave;rement meubl&eacute; &agrave; Bali. Cuisine &eacute;quip&eacute;e, deux salles de bain, balcon avec vue. Id&eacute;al pour expatri&eacute;s.&quot;,
            &quot;location&quot;: &quot;Bali, Douala&quot;,
            &quot;city&quot;: &quot;Douala&quot;,
            &quot;region&quot;: &quot;Littoral&quot;,
            &quot;features&quot;: [
                &quot;Climatisation&quot;,
                &quot;Wi-Fi&quot;,
                &quot;Parking&quot;,
                &quot;Balcon&quot;,
                &quot;Cuisine &eacute;quip&eacute;e&quot;
            ],
            &quot;bedrooms&quot;: 2,
            &quot;bathrooms&quot;: 2,
            &quot;area&quot;: &quot;90.00&quot;,
            &quot;construction_year&quot;: 2015,
            &quot;views_count&quot;: 256,
            &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-03-11T15:40:13.000000Z&quot;,
            &quot;image&quot;: &quot;https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
            &quot;rooms&quot;: 2,
            &quot;is_favorite&quot;: false,
            &quot;primary_image&quot;: {
                &quot;id&quot;: 7,
                &quot;property_id&quot;: 7,
                &quot;path&quot;: &quot;https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;is_primary&quot;: 1,
                &quot;order&quot;: 0,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
            }
        },
        {
            &quot;id&quot;: 2,
            &quot;user_id&quot;: 6,
            &quot;agent_id&quot;: null,
            &quot;title&quot;: &quot;Chambre Meubl&eacute;e - Akwa, Douala&quot;,
            &quot;slug&quot;: &quot;chambre-meublee-akwa-douala-sucLU3&quot;,
            &quot;type&quot;: &quot;rent&quot;,
            &quot;category&quot;: &quot;Chambre&quot;,
            &quot;etat&quot;: &quot;Meubl&eacute;&quot;,
            &quot;amenities&quot;: [
                &quot;Eau courante&quot;,
                &quot;&Eacute;lectricit&eacute; permanente&quot;,
                &quot;Gardiennage&quot;
            ],
            &quot;status&quot;: &quot;active&quot;,
            &quot;price&quot;: &quot;30000.00&quot;,
            &quot;currency&quot;: &quot;XAF&quot;,
            &quot;description&quot;: &quot;Chambre enti&egrave;rement meubl&eacute;e (lit, armoire, table) en plein c&oelig;ur d&#039;Akwa. Acc&egrave;s aux commerces, restaurants et transports en commun.&quot;,
            &quot;location&quot;: &quot;Akwa, Douala&quot;,
            &quot;city&quot;: &quot;Douala&quot;,
            &quot;region&quot;: &quot;Littoral&quot;,
            &quot;features&quot;: [
                &quot;Eau courante&quot;,
                &quot;&Eacute;lectricit&eacute; permanente&quot;,
                &quot;Gardiennage&quot;
            ],
            &quot;bedrooms&quot;: 1,
            &quot;bathrooms&quot;: 1,
            &quot;area&quot;: &quot;18.00&quot;,
            &quot;construction_year&quot;: 2018,
            &quot;views_count&quot;: 28,
            &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
            &quot;image&quot;: &quot;https://images.unsplash.com/photo-1598928506311-c55ded91a20c?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
            &quot;rooms&quot;: 1,
            &quot;is_favorite&quot;: false,
            &quot;primary_image&quot;: {
                &quot;id&quot;: 2,
                &quot;property_id&quot;: 2,
                &quot;path&quot;: &quot;https://images.unsplash.com/photo-1598928506311-c55ded91a20c?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
                &quot;is_primary&quot;: 1,
                &quot;order&quot;: 0,
                &quot;created_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-05T14:46:55.000000Z&quot;
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-properties--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-properties--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-properties--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-properties--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-properties--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-properties--id-" data-method="GET"
      data-path="api/properties/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-properties--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-properties--id-"
                    onclick="tryItOut('GETapi-properties--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-properties--id-"
                    onclick="cancelTryOut('GETapi-properties--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-properties--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/properties/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-properties--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-properties--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-properties--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the property. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-home">GET api/home</h2>

<p>
</p>



<span id="example-requests-GETapi-home">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/home" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/home"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-home">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;categories&quot;: [
        {
            &quot;id&quot;: &quot;Chambre&quot;,
            &quot;name&quot;: &quot;Chambre&quot;,
            &quot;icon&quot;: &quot;bed&quot;,
            &quot;count&quot;: 4
        },
        {
            &quot;id&quot;: &quot;Studio&quot;,
            &quot;name&quot;: &quot;Studio&quot;,
            &quot;icon&quot;: &quot;door-open&quot;,
            &quot;count&quot;: 5
        },
        {
            &quot;id&quot;: &quot;Appartement&quot;,
            &quot;name&quot;: &quot;Appartement&quot;,
            &quot;icon&quot;: &quot;building&quot;,
            &quot;count&quot;: 11
        },
        {
            &quot;id&quot;: &quot;Maison&quot;,
            &quot;name&quot;: &quot;Maison&quot;,
            &quot;icon&quot;: &quot;house&quot;,
            &quot;count&quot;: 3
        },
        {
            &quot;id&quot;: &quot;Villa&quot;,
            &quot;name&quot;: &quot;Villa&quot;,
            &quot;icon&quot;: &quot;crown&quot;,
            &quot;count&quot;: 4
        }
    ],
    &quot;newProperties&quot;: [
        {
            &quot;id&quot;: 27,
            &quot;title&quot;: &quot;Studio a bastos&quot;,
            &quot;price&quot;: &quot;60000.00&quot;,
            &quot;owner&quot;: &quot;Bailleur Test&quot;,
            &quot;date&quot;: &quot;2 weeks ago&quot;,
            &quot;rooms&quot;: 2,
            &quot;bathrooms&quot;: 2,
            &quot;area&quot;: &quot;1.00&quot;,
            &quot;image&quot;: &quot;properties/py1ZAU0RAuQ6pLyWVtCzoGmW3m63MVlmnzA3xnbs.png&quot;,
            &quot;city&quot;: &quot;Yaound&eacute;&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;title&quot;: &quot;Chambre Moderne - Makepe, Douala&quot;,
            &quot;price&quot;: &quot;25000.00&quot;,
            &quot;owner&quot;: &quot;Patrick Essomba&quot;,
            &quot;date&quot;: &quot;3 weeks ago&quot;,
            &quot;rooms&quot;: 1,
            &quot;bathrooms&quot;: 1,
            &quot;area&quot;: &quot;15.00&quot;,
            &quot;image&quot;: &quot;https://images.unsplash.com/photo-1598928506311-c55ded91a20c?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
            &quot;city&quot;: &quot;Douala&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;title&quot;: &quot;Chambre Meubl&eacute;e - Akwa, Douala&quot;,
            &quot;price&quot;: &quot;30000.00&quot;,
            &quot;owner&quot;: &quot;Marie-Claire Ngo Biyong&quot;,
            &quot;date&quot;: &quot;3 weeks ago&quot;,
            &quot;rooms&quot;: 1,
            &quot;bathrooms&quot;: 1,
            &quot;area&quot;: &quot;18.00&quot;,
            &quot;image&quot;: &quot;https://images.unsplash.com/photo-1598928506311-c55ded91a20c?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
            &quot;city&quot;: &quot;Douala&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;title&quot;: &quot;Studio Haut Standing - Bonanjo, Douala&quot;,
            &quot;price&quot;: &quot;75000.00&quot;,
            &quot;owner&quot;: &quot;Patrick Essomba&quot;,
            &quot;date&quot;: &quot;3 weeks ago&quot;,
            &quot;rooms&quot;: 1,
            &quot;bathrooms&quot;: 1,
            &quot;area&quot;: &quot;40.00&quot;,
            &quot;image&quot;: &quot;https://images.unsplash.com/photo-1493809842364-78817add7ffb?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
            &quot;city&quot;: &quot;Douala&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;title&quot;: &quot;Studio Climatis&eacute; 35m&sup2; - Deido, Douala&quot;,
            &quot;price&quot;: &quot;55000.00&quot;,
            &quot;owner&quot;: &quot;A&iuml;cha Aboubakar&quot;,
            &quot;date&quot;: &quot;3 weeks ago&quot;,
            &quot;rooms&quot;: 1,
            &quot;bathrooms&quot;: 1,
            &quot;area&quot;: &quot;35.00&quot;,
            &quot;image&quot;: &quot;https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
            &quot;city&quot;: &quot;Douala&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;title&quot;: &quot;Appartement F3 - Bonapriso, Douala&quot;,
            &quot;price&quot;: &quot;180000.00&quot;,
            &quot;owner&quot;: &quot;Jean-Baptiste Mbarga&quot;,
            &quot;date&quot;: &quot;3 weeks ago&quot;,
            &quot;rooms&quot;: 3,
            &quot;bathrooms&quot;: 2,
            &quot;area&quot;: &quot;110.00&quot;,
            &quot;image&quot;: &quot;https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
            &quot;city&quot;: &quot;Douala&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;title&quot;: &quot;Appartement F2 - Makepe, Douala&quot;,
            &quot;price&quot;: &quot;100000.00&quot;,
            &quot;owner&quot;: &quot;Bailleur Test&quot;,
            &quot;date&quot;: &quot;3 weeks ago&quot;,
            &quot;rooms&quot;: 2,
            &quot;bathrooms&quot;: 1,
            &quot;area&quot;: &quot;75.00&quot;,
            &quot;image&quot;: &quot;https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
            &quot;city&quot;: &quot;Douala&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;title&quot;: &quot;Appartement Meubl&eacute; - Bali, Douala&quot;,
            &quot;price&quot;: &quot;150000.00&quot;,
            &quot;owner&quot;: &quot;Marie-Claire Ngo Biyong&quot;,
            &quot;date&quot;: &quot;3 weeks ago&quot;,
            &quot;rooms&quot;: 2,
            &quot;bathrooms&quot;: 2,
            &quot;area&quot;: &quot;90.00&quot;,
            &quot;image&quot;: &quot;https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
            &quot;city&quot;: &quot;Douala&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;title&quot;: &quot;Maison F4 avec Cour - Logbaba, Douala&quot;,
            &quot;price&quot;: &quot;200000.00&quot;,
            &quot;owner&quot;: &quot;A&iuml;cha Aboubakar&quot;,
            &quot;date&quot;: &quot;3 weeks ago&quot;,
            &quot;rooms&quot;: 4,
            &quot;bathrooms&quot;: 2,
            &quot;area&quot;: &quot;140.00&quot;,
            &quot;image&quot;: &quot;https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
            &quot;city&quot;: &quot;Douala&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;title&quot;: &quot;Villa de Prestige - Bonapriso, Douala&quot;,
            &quot;price&quot;: &quot;650000.00&quot;,
            &quot;owner&quot;: &quot;A&iuml;cha Aboubakar&quot;,
            &quot;date&quot;: &quot;3 weeks ago&quot;,
            &quot;rooms&quot;: 5,
            &quot;bathrooms&quot;: 4,
            &quot;area&quot;: &quot;320.00&quot;,
            &quot;image&quot;: &quot;https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
            &quot;city&quot;: &quot;Douala&quot;
        }
    ],
    &quot;agents&quot;: [
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Jean-Baptiste Mbarga&quot;,
            &quot;role&quot;: &quot;Agent Immobilier&quot;,
            &quot;location&quot;: &quot;Cameroun&quot;,
            &quot;description&quot;: &quot;Agent immobilier certifi&eacute; sur Home Cameroon.&quot;,
            &quot;propertiesCount&quot;: 3,
            &quot;rating&quot;: 4.9,
            &quot;reviews&quot;: 10,
            &quot;image&quot;: &quot;http://localhost/storage/user_profil/agent1.jpg&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Marie-Claire Ngo Biyong&quot;,
            &quot;role&quot;: &quot;Agent Immobilier&quot;,
            &quot;location&quot;: &quot;Cameroun&quot;,
            &quot;description&quot;: &quot;Agent immobilier certifi&eacute; sur Home Cameroon.&quot;,
            &quot;propertiesCount&quot;: 4,
            &quot;rating&quot;: 4.9,
            &quot;reviews&quot;: 10,
            &quot;image&quot;: &quot;http://localhost/storage/user_profil/agent2.jpg&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;Patrick Essomba&quot;,
            &quot;role&quot;: &quot;Agent Immobilier&quot;,
            &quot;location&quot;: &quot;Cameroun&quot;,
            &quot;description&quot;: &quot;Agent immobilier certifi&eacute; sur Home Cameroon.&quot;,
            &quot;propertiesCount&quot;: 5,
            &quot;rating&quot;: 4.9,
            &quot;reviews&quot;: 10,
            &quot;image&quot;: &quot;http://localhost/storage/user_profil/agent3.jpg&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;A&iuml;cha Aboubakar&quot;,
            &quot;role&quot;: &quot;Agent Immobilier&quot;,
            &quot;location&quot;: &quot;Cameroun&quot;,
            &quot;description&quot;: &quot;Agent immobilier certifi&eacute; sur Home Cameroon.&quot;,
            &quot;propertiesCount&quot;: 8,
            &quot;rating&quot;: 4.9,
            &quot;reviews&quot;: 10,
            &quot;image&quot;: &quot;http://localhost/storage/user_profil/agent4.jpg&quot;
        }
    ],
    &quot;services&quot;: [
        {
            &quot;id&quot;: 5,
            &quot;title&quot;: &quot;Installation Climatiseur&quot;,
            &quot;subtitle&quot;: &quot;Climatisation&quot;,
            &quot;description&quot;: &quot;Pose et mise en service de votre syst&egrave;me de climatisation.&quot;,
            &quot;icon&quot;: &quot;snowflake&quot;,
            &quot;tags&quot;: [
                &quot;Service&quot;,
                &quot;Pro&quot;
            ]
        },
        {
            &quot;id&quot;: 6,
            &quot;title&quot;: &quot;Menuiserie sur Mesure&quot;,
            &quot;subtitle&quot;: &quot;Menuiserie&quot;,
            &quot;description&quot;: &quot;Cr&eacute;ation de meubles et placards sur mesure.&quot;,
            &quot;icon&quot;: &quot;hammer&quot;,
            &quot;tags&quot;: [
                &quot;Service&quot;,
                &quot;Pro&quot;
            ]
        },
        {
            &quot;id&quot;: 1,
            &quot;title&quot;: &quot;R&eacute;paration de Fuites&quot;,
            &quot;subtitle&quot;: &quot;Plomberie&quot;,
            &quot;description&quot;: &quot;Service rapide pour toutes fuites d&#039;eau : robinets, tuyaux, etc.&quot;,
            &quot;icon&quot;: &quot;wrench&quot;,
            &quot;tags&quot;: [
                &quot;Service&quot;,
                &quot;Pro&quot;
            ]
        },
        {
            &quot;id&quot;: 2,
            &quot;title&quot;: &quot;Installation &Eacute;lectrique Compl&egrave;te&quot;,
            &quot;subtitle&quot;: &quot;&Eacute;lectricit&eacute;&quot;,
            &quot;description&quot;: &quot;Installation s&eacute;curis&eacute;e pour nouvelles constructions ou r&eacute;novations.&quot;,
            &quot;icon&quot;: &quot;bolt&quot;,
            &quot;tags&quot;: [
                &quot;Service&quot;,
                &quot;Pro&quot;
            ]
        },
        {
            &quot;id&quot;: 3,
            &quot;title&quot;: &quot;Peinture Murale&quot;,
            &quot;subtitle&quot;: &quot;Peinture&quot;,
            &quot;description&quot;: &quot;Peinture de haute qualit&eacute; pour int&eacute;rieur et ext&eacute;rieur.&quot;,
            &quot;icon&quot;: &quot;paint-roller&quot;,
            &quot;tags&quot;: [
                &quot;Service&quot;,
                &quot;Pro&quot;
            ]
        },
        {
            &quot;id&quot;: 4,
            &quot;title&quot;: &quot;Nettoyage de Printemps&quot;,
            &quot;subtitle&quot;: &quot;Nettoyage&quot;,
            &quot;description&quot;: &quot;Nettoyage complet de votre domicile du sol au plafond.&quot;,
            &quot;icon&quot;: &quot;broom&quot;,
            &quot;tags&quot;: [
                &quot;Service&quot;,
                &quot;Pro&quot;
            ]
        }
    ],
    &quot;products&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Canap&eacute; d&#039;angle Moderne&quot;,
            &quot;price&quot;: &quot;450000.00&quot;,
            &quot;description&quot;: null,
            &quot;image&quot;: &quot;https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
            &quot;badge&quot;: &quot;-10%&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Lampe Suspendue Industrielle&quot;,
            &quot;price&quot;: &quot;45000.00&quot;,
            &quot;description&quot;: null,
            &quot;image&quot;: &quot;http://localhost/storage/meuble/lampe suspendu.webp&quot;,
            &quot;badge&quot;: null
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Kit Cam&eacute;ras de Surveillance&quot;,
            &quot;price&quot;: &quot;120000.00&quot;,
            &quot;description&quot;: null,
            &quot;image&quot;: &quot;http://localhost/storage/meuble/kit camera.jfif&quot;,
            &quot;badge&quot;: &quot;Promo&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Table Basse en Verre&quot;,
            &quot;price&quot;: &quot;85000.00&quot;,
            &quot;description&quot;: null,
            &quot;image&quot;: &quot;http://localhost/storage/meuble/table basse en verre.webp&quot;,
            &quot;badge&quot;: null
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Vase C&eacute;ramique Artisanal&quot;,
            &quot;price&quot;: &quot;25000.00&quot;,
            &quot;description&quot;: null,
            &quot;image&quot;: &quot;http://localhost/storage/meuble/vase ceramique.webp&quot;,
            &quot;badge&quot;: &quot;Nouveau&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-home" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-home"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-home"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-home" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-home">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-home" data-method="GET"
      data-path="api/home"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-home', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-home"
                    onclick="tryItOut('GETapi-home');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-home"
                    onclick="cancelTryOut('GETapi-home');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-home"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/home</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-home"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-home"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-marketplace-items">GET api/marketplace/items</h2>

<p>
</p>



<span id="example-requests-GETapi-marketplace-items">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/marketplace/items" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/marketplace/items"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-marketplace-items">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Menuiserie sur Mesure&quot;,
            &quot;price&quot;: &quot;25000.00&quot;,
            &quot;oldPrice&quot;: null,
            &quot;image&quot;: &quot;hammer&quot;,
            &quot;category&quot;: &quot;Menuiserie&quot;,
            &quot;rating&quot;: 5,
            &quot;reviews&quot;: 0,
            &quot;location&quot;: null,
            &quot;isNew&quot;: false,
            &quot;discount&quot;: null,
            &quot;type&quot;: &quot;service&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Vase C&eacute;ramique Artisanal&quot;,
            &quot;price&quot;: &quot;25000.00&quot;,
            &quot;oldPrice&quot;: null,
            &quot;image&quot;: &quot;http://localhost/storage/meuble/vase ceramique.webp&quot;,
            &quot;category&quot;: &quot;D&eacute;coration&quot;,
            &quot;rating&quot;: 5,
            &quot;reviews&quot;: 67,
            &quot;location&quot;: &quot;Bafoussam&quot;,
            &quot;isNew&quot;: 1,
            &quot;discount&quot;: null,
            &quot;type&quot;: &quot;product&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Installation Climatiseur&quot;,
            &quot;price&quot;: &quot;15000.00&quot;,
            &quot;oldPrice&quot;: null,
            &quot;image&quot;: &quot;snowflake&quot;,
            &quot;category&quot;: &quot;Climatisation&quot;,
            &quot;rating&quot;: 5,
            &quot;reviews&quot;: 0,
            &quot;location&quot;: null,
            &quot;isNew&quot;: false,
            &quot;discount&quot;: null,
            &quot;type&quot;: &quot;service&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Table Basse en Verre&quot;,
            &quot;price&quot;: &quot;85000.00&quot;,
            &quot;oldPrice&quot;: &quot;95000.00&quot;,
            &quot;image&quot;: &quot;http://localhost/storage/meuble/table basse en verre.webp&quot;,
            &quot;category&quot;: &quot;Meubles&quot;,
            &quot;rating&quot;: 4,
            &quot;reviews&quot;: 45,
            &quot;location&quot;: &quot;Yaound&eacute;, Omnisports&quot;,
            &quot;isNew&quot;: 1,
            &quot;discount&quot;: 11,
            &quot;type&quot;: &quot;product&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Nettoyage de Printemps&quot;,
            &quot;price&quot;: &quot;10000.00&quot;,
            &quot;oldPrice&quot;: null,
            &quot;image&quot;: &quot;broom&quot;,
            &quot;category&quot;: &quot;Nettoyage&quot;,
            &quot;rating&quot;: 5,
            &quot;reviews&quot;: 0,
            &quot;location&quot;: null,
            &quot;isNew&quot;: false,
            &quot;discount&quot;: null,
            &quot;type&quot;: &quot;service&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Kit Cam&eacute;ras de Surveillance&quot;,
            &quot;price&quot;: &quot;120000.00&quot;,
            &quot;oldPrice&quot;: &quot;150000.00&quot;,
            &quot;image&quot;: &quot;http://localhost/storage/meuble/kit camera.jfif&quot;,
            &quot;category&quot;: &quot;S&eacute;curit&eacute;&quot;,
            &quot;rating&quot;: 5,
            &quot;reviews&quot;: 210,
            &quot;location&quot;: &quot;Douala, Bonapriso&quot;,
            &quot;isNew&quot;: 1,
            &quot;discount&quot;: 20,
            &quot;type&quot;: &quot;product&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Peinture Murale&quot;,
            &quot;price&quot;: &quot;1500.00&quot;,
            &quot;oldPrice&quot;: null,
            &quot;image&quot;: &quot;paint-roller&quot;,
            &quot;category&quot;: &quot;Peinture&quot;,
            &quot;rating&quot;: 5,
            &quot;reviews&quot;: 0,
            &quot;location&quot;: null,
            &quot;isNew&quot;: false,
            &quot;discount&quot;: null,
            &quot;type&quot;: &quot;service&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Lampe Suspendue Industrielle&quot;,
            &quot;price&quot;: &quot;45000.00&quot;,
            &quot;oldPrice&quot;: null,
            &quot;image&quot;: &quot;http://localhost/storage/meuble/lampe suspendu.webp&quot;,
            &quot;category&quot;: &quot;&Eacute;clairage&quot;,
            &quot;rating&quot;: 4,
            &quot;reviews&quot;: 89,
            &quot;location&quot;: &quot;Yaound&eacute;, Bastos&quot;,
            &quot;isNew&quot;: 1,
            &quot;discount&quot;: null,
            &quot;type&quot;: &quot;product&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Installation &Eacute;lectrique Compl&egrave;te&quot;,
            &quot;price&quot;: &quot;50000.00&quot;,
            &quot;oldPrice&quot;: null,
            &quot;image&quot;: &quot;bolt&quot;,
            &quot;category&quot;: &quot;&Eacute;lectricit&eacute;&quot;,
            &quot;rating&quot;: 5,
            &quot;reviews&quot;: 0,
            &quot;location&quot;: null,
            &quot;isNew&quot;: false,
            &quot;discount&quot;: null,
            &quot;type&quot;: &quot;service&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Canap&eacute; d&#039;angle Moderne&quot;,
            &quot;price&quot;: &quot;450000.00&quot;,
            &quot;oldPrice&quot;: &quot;500000.00&quot;,
            &quot;image&quot;: &quot;https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&amp;fit=crop&amp;q=80&amp;w=800&quot;,
            &quot;category&quot;: &quot;Meubles&quot;,
            &quot;rating&quot;: 5,
            &quot;reviews&quot;: 124,
            &quot;location&quot;: &quot;Douala, Akwa&quot;,
            &quot;isNew&quot;: 1,
            &quot;discount&quot;: 10,
            &quot;type&quot;: &quot;product&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;R&eacute;paration de Fuites&quot;,
            &quot;price&quot;: &quot;5000.00&quot;,
            &quot;oldPrice&quot;: null,
            &quot;image&quot;: &quot;wrench&quot;,
            &quot;category&quot;: &quot;Plomberie&quot;,
            &quot;rating&quot;: 5,
            &quot;reviews&quot;: 0,
            &quot;location&quot;: null,
            &quot;isNew&quot;: false,
            &quot;discount&quot;: null,
            &quot;type&quot;: &quot;service&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-marketplace-items" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-marketplace-items"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-marketplace-items"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-marketplace-items" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-marketplace-items">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-marketplace-items" data-method="GET"
      data-path="api/marketplace/items"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-marketplace-items', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-marketplace-items"
                    onclick="tryItOut('GETapi-marketplace-items');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-marketplace-items"
                    onclick="cancelTryOut('GETapi-marketplace-items');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-marketplace-items"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/marketplace/items</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-marketplace-items"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-marketplace-items"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-marketplace-items--id-">GET api/marketplace/items/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-marketplace-items--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/marketplace/items/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/marketplace/items/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-marketplace-items--id-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Produit non trouv&eacute;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-marketplace-items--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-marketplace-items--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-marketplace-items--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-marketplace-items--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-marketplace-items--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-marketplace-items--id-" data-method="GET"
      data-path="api/marketplace/items/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-marketplace-items--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-marketplace-items--id-"
                    onclick="tryItOut('GETapi-marketplace-items--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-marketplace-items--id-"
                    onclick="cancelTryOut('GETapi-marketplace-items--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-marketplace-items--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/marketplace/items/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-marketplace-items--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-marketplace-items--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-marketplace-items--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the item. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-marketplace-categories">GET api/marketplace/categories</h2>

<p>
</p>



<span id="example-requests-GETapi-marketplace-categories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/marketplace/categories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/marketplace/categories"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-marketplace-categories">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;all&quot;,
            &quot;name&quot;: &quot;Tout&quot;,
            &quot;icon&quot;: &quot;fas fa-th-large&quot;
        },
        {
            &quot;id&quot;: &quot;Meubles&quot;,
            &quot;name&quot;: &quot;Meubles&quot;,
            &quot;icon&quot;: &quot;fas fa-couch&quot;
        },
        {
            &quot;id&quot;: &quot;&Eacute;clairage&quot;,
            &quot;name&quot;: &quot;&Eacute;clairage&quot;,
            &quot;icon&quot;: &quot;fas fa-tag&quot;
        },
        {
            &quot;id&quot;: &quot;S&eacute;curit&eacute;&quot;,
            &quot;name&quot;: &quot;S&eacute;curit&eacute;&quot;,
            &quot;icon&quot;: &quot;fas fa-shield-alt&quot;
        },
        {
            &quot;id&quot;: &quot;D&eacute;coration&quot;,
            &quot;name&quot;: &quot;D&eacute;coration&quot;,
            &quot;icon&quot;: &quot;fas fa-tag&quot;
        },
        {
            &quot;id&quot;: &quot;services&quot;,
            &quot;name&quot;: &quot;Services&quot;,
            &quot;icon&quot;: &quot;fas fa-tools&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-marketplace-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-marketplace-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-marketplace-categories"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-marketplace-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-marketplace-categories">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-marketplace-categories" data-method="GET"
      data-path="api/marketplace/categories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-marketplace-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-marketplace-categories"
                    onclick="tryItOut('GETapi-marketplace-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-marketplace-categories"
                    onclick="cancelTryOut('GETapi-marketplace-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-marketplace-categories"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/marketplace/categories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-marketplace-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-marketplace-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-notchpay-callback">Gère le retour de NotchPay après une tentative de paiement (GET redirect)</h2>

<p>
</p>



<span id="example-requests-GETapi-notchpay-callback">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/notchpay/callback" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/notchpay/callback"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-notchpay-callback">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-notchpay-callback" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-notchpay-callback"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-notchpay-callback"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-notchpay-callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-notchpay-callback">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-notchpay-callback" data-method="GET"
      data-path="api/notchpay/callback"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-notchpay-callback', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-notchpay-callback"
                    onclick="tryItOut('GETapi-notchpay-callback');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-notchpay-callback"
                    onclick="cancelTryOut('GETapi-notchpay-callback');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-notchpay-callback"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/notchpay/callback</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-notchpay-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-notchpay-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-notchpay-webhook">Gère les notifications asynchrones de NotchPay (POST Webhook)</h2>

<p>
</p>



<span id="example-requests-POSTapi-notchpay-webhook">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/notchpay/webhook" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/notchpay/webhook"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-notchpay-webhook">
</span>
<span id="execution-results-POSTapi-notchpay-webhook" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-notchpay-webhook"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-notchpay-webhook"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-notchpay-webhook" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-notchpay-webhook">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-notchpay-webhook" data-method="POST"
      data-path="api/notchpay/webhook"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-notchpay-webhook', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-notchpay-webhook"
                    onclick="tryItOut('POSTapi-notchpay-webhook');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-notchpay-webhook"
                    onclick="cancelTryOut('POSTapi-notchpay-webhook');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-notchpay-webhook"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/notchpay/webhook</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-notchpay-webhook"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-notchpay-webhook"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-transactions--reference--status">Récupère le statut d&#039;une transaction locale</h2>

<p>
</p>



<span id="example-requests-GETapi-transactions--reference--status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/transactions/architecto/status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/transactions/architecto/status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-transactions--reference--status">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-transactions--reference--status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-transactions--reference--status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-transactions--reference--status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-transactions--reference--status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-transactions--reference--status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-transactions--reference--status" data-method="GET"
      data-path="api/transactions/{reference}/status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-transactions--reference--status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-transactions--reference--status"
                    onclick="tryItOut('GETapi-transactions--reference--status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-transactions--reference--status"
                    onclick="cancelTryOut('GETapi-transactions--reference--status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-transactions--reference--status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/transactions/{reference}/status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-transactions--reference--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-transactions--reference--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>reference</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="reference"                data-endpoint="GETapi-transactions--reference--status"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-logout">POST api/logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-logout">
</span>
<span id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-logout" data-method="POST"
      data-path="api/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-logout"
                    onclick="tryItOut('POSTapi-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-logout"
                    onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PUTapi-profile">Mettre à jour les informations de base du profil</h2>

<p>
</p>



<span id="example-requests-PUTapi-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"phone\": \"ngzmiyvdljnikhwa\",
    \"city\": \"y\",
    \"bio\": \"k\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "phone": "ngzmiyvdljnikhwa",
    "city": "y",
    "bio": "k"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-profile">
</span>
<span id="execution-results-PUTapi-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-profile" data-method="PUT"
      data-path="api/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-profile"
                    onclick="tryItOut('PUTapi-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-profile"
                    onclick="cancelTryOut('PUTapi-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-profile"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="PUTapi-profile"
               value="ngzmiyvdljnikhwa"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>ngzmiyvdljnikhwa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city"                data-endpoint="PUTapi-profile"
               value="y"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>y</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bio</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bio"                data-endpoint="PUTapi-profile"
               value="k"
               data-component="body">
    <br>
<p>Must not be greater than 1000 characters. Example: <code>k</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-profile-avatar">Mettre à jour l&#039;avatar</h2>

<p>
</p>



<span id="example-requests-POSTapi-profile-avatar">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/profile/avatar" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "avatar=@C:\Users\DELL\AppData\Local\Temp\php3E1E.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/profile/avatar"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('avatar', document.querySelector('input[name="avatar"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-profile-avatar">
</span>
<span id="execution-results-POSTapi-profile-avatar" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-profile-avatar"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-profile-avatar"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-profile-avatar" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-profile-avatar">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-profile-avatar" data-method="POST"
      data-path="api/profile/avatar"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-profile-avatar', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-profile-avatar"
                    onclick="tryItOut('POSTapi-profile-avatar');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-profile-avatar"
                    onclick="cancelTryOut('POSTapi-profile-avatar');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-profile-avatar"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/profile/avatar</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-profile-avatar"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-profile-avatar"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>avatar</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="avatar"                data-endpoint="POSTapi-profile-avatar"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 5120 kilobytes. Example: <code>C:\Users\DELL\AppData\Local\Temp\php3E1E.tmp</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-profile-password">Changer le mot de passe</h2>

<p>
</p>



<span id="example-requests-POSTapi-profile-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/profile/password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"current_password\": \"architecto\",
    \"password\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/profile/password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "current_password": "architecto",
    "password": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-profile-password">
</span>
<span id="execution-results-POSTapi-profile-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-profile-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-profile-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-profile-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-profile-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-profile-password" data-method="POST"
      data-path="api/profile/password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-profile-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-profile-password"
                    onclick="tryItOut('POSTapi-profile-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-profile-password"
                    onclick="cancelTryOut('POSTapi-profile-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-profile-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/profile/password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-profile-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-profile-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>current_password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="current_password"                data-endpoint="POSTapi-profile-password"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-profile-password"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-roles">Get user roles.</h2>

<p>
</p>



<span id="example-requests-GETapi-roles">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/roles" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/roles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-roles">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-roles" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-roles"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-roles"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-roles">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-roles" data-method="GET"
      data-path="api/roles"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-roles', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-roles"
                    onclick="tryItOut('GETapi-roles');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-roles"
                    onclick="cancelTryOut('GETapi-roles');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-roles"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/roles</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-roles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-roles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-roles-switch">Switch current active role.</h2>

<p>
</p>



<span id="example-requests-POSTapi-roles-switch">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/roles/switch" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"role\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/roles/switch"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "role": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-roles-switch">
</span>
<span id="execution-results-POSTapi-roles-switch" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-roles-switch"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-roles-switch"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-roles-switch" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-roles-switch">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-roles-switch" data-method="POST"
      data-path="api/roles/switch"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-roles-switch', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-roles-switch"
                    onclick="tryItOut('POSTapi-roles-switch');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-roles-switch"
                    onclick="cancelTryOut('POSTapi-roles-switch');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-roles-switch"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/roles/switch</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-roles-switch"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-roles-switch"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="role"                data-endpoint="POSTapi-roles-switch"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-roles-acquire">Acquire a new role.</h2>

<p>
</p>



<span id="example-requests-POSTapi-roles-acquire">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/roles/acquire" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"role\": \"prestataire\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/roles/acquire"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "role": "prestataire"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-roles-acquire">
</span>
<span id="execution-results-POSTapi-roles-acquire" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-roles-acquire"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-roles-acquire"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-roles-acquire" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-roles-acquire">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-roles-acquire" data-method="POST"
      data-path="api/roles/acquire"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-roles-acquire', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-roles-acquire"
                    onclick="tryItOut('POSTapi-roles-acquire');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-roles-acquire"
                    onclick="cancelTryOut('POSTapi-roles-acquire');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-roles-acquire"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/roles/acquire</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-roles-acquire"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-roles-acquire"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="role"                data-endpoint="POSTapi-roles-acquire"
               value="prestataire"
               data-component="body">
    <br>
<p>Example: <code>prestataire</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>bailleur</code></li> <li><code>locataire</code></li> <li><code>prestataire</code></li> <li><code>agent</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-properties">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-properties">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/properties" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "title=b"\
    --form "type=rent"\
    --form "category=architecto"\
    --form "price=4326.41688"\
    --form "location=architecto"\
    --form "city=architecto"\
    --form "description=Eius et animi quos velit et."\
    --form "bedrooms=16"\
    --form "bathrooms=16"\
    --form "area=4326.41688"\
    --form "etat=architecto"\
    --form "images[]=@C:\Users\DELL\AppData\Local\Temp\php3E7D.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/properties"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('title', 'b');
body.append('type', 'rent');
body.append('category', 'architecto');
body.append('price', '4326.41688');
body.append('location', 'architecto');
body.append('city', 'architecto');
body.append('description', 'Eius et animi quos velit et.');
body.append('bedrooms', '16');
body.append('bathrooms', '16');
body.append('area', '4326.41688');
body.append('etat', 'architecto');
body.append('images[]', document.querySelector('input[name="images[]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-properties">
</span>
<span id="execution-results-POSTapi-properties" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-properties"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-properties"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-properties" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-properties">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-properties" data-method="POST"
      data-path="api/properties"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-properties', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-properties"
                    onclick="tryItOut('POSTapi-properties');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-properties"
                    onclick="cancelTryOut('POSTapi-properties');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-properties"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/properties</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-properties"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-properties"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-properties"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-properties"
               value="rent"
               data-component="body">
    <br>
<p>Example: <code>rent</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>rent</code></li> <li><code>sale</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="POSTapi-properties"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price"                data-endpoint="POSTapi-properties"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="location"                data-endpoint="POSTapi-properties"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city"                data-endpoint="POSTapi-properties"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-properties"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bedrooms</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="bedrooms"                data-endpoint="POSTapi-properties"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bathrooms</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="bathrooms"                data-endpoint="POSTapi-properties"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>area</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="area"                data-endpoint="POSTapi-properties"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>etat</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="etat"                data-endpoint="POSTapi-properties"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>amenities</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="amenities"                data-endpoint="POSTapi-properties"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>images</code></b>&nbsp;&nbsp;
<small>file[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="images[0]"                data-endpoint="POSTapi-properties"
               data-component="body">
        <input type="file" style="display: none"
               name="images[1]"                data-endpoint="POSTapi-properties"
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 5120 kilobytes.</p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-properties--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-properties--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/properties/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/properties/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-properties--id-">
</span>
<span id="execution-results-PUTapi-properties--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-properties--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-properties--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-properties--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-properties--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-properties--id-" data-method="PUT"
      data-path="api/properties/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-properties--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-properties--id-"
                    onclick="tryItOut('PUTapi-properties--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-properties--id-"
                    onclick="cancelTryOut('PUTapi-properties--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-properties--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/properties/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-properties--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-properties--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-properties--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the property. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-properties--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-properties--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/properties/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/properties/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-properties--id-">
</span>
<span id="execution-results-DELETEapi-properties--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-properties--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-properties--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-properties--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-properties--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-properties--id-" data-method="DELETE"
      data-path="api/properties/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-properties--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-properties--id-"
                    onclick="tryItOut('DELETEapi-properties--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-properties--id-"
                    onclick="cancelTryOut('DELETEapi-properties--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-properties--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/properties/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-properties--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-properties--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-properties--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the property. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-visits">Liste des visites de l&#039;utilisateur connecté.</h2>

<p>
</p>



<span id="example-requests-GETapi-visits">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/visits" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/visits"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-visits">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-visits" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-visits"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-visits"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-visits" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-visits">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-visits" data-method="GET"
      data-path="api/visits"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-visits', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-visits"
                    onclick="tryItOut('GETapi-visits');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-visits"
                    onclick="cancelTryOut('GETapi-visits');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-visits"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/visits</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-visits"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-visits"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-visits">Réserver une visite.</h2>

<p>
</p>

<p>Accessible à tout utilisateur authentifié (pas besoin du rôle locataire).</p>

<span id="example-requests-POSTapi-visits">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/visits" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"property_id\": \"architecto\",
    \"scheduled_at\": \"2052-04-19\",
    \"notes\": \"architecto\",
    \"fee_payment_method\": \"momo\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/visits"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "property_id": "architecto",
    "scheduled_at": "2052-04-19",
    "notes": "architecto",
    "fee_payment_method": "momo"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-visits">
</span>
<span id="execution-results-POSTapi-visits" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-visits"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-visits"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-visits" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-visits">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-visits" data-method="POST"
      data-path="api/visits"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-visits', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-visits"
                    onclick="tryItOut('POSTapi-visits');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-visits"
                    onclick="cancelTryOut('POSTapi-visits');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-visits"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/visits</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-visits"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-visits"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>property_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="property_id"                data-endpoint="POSTapi-visits"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the properties table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>scheduled_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="scheduled_at"                data-endpoint="POSTapi-visits"
               value="2052-04-19"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>now</code>. Example: <code>2052-04-19</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-visits"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>fee_payment_method</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="fee_payment_method"                data-endpoint="POSTapi-visits"
               value="momo"
               data-component="body">
    <br>
<p>Example: <code>momo</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>momo</code></li> <li><code>om</code></li> <li><code>card</code></li> <li><code>cash</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-visits--id--confirm">L&#039;utilisateur confirme que la visite a bien eu lieu (de son côté).</h2>

<p>
</p>

<p>→ Si l'agent a aussi confirmé, la visite passe à "completed".</p>

<span id="example-requests-POSTapi-visits--id--confirm">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/visits/architecto/confirm" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/visits/architecto/confirm"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-visits--id--confirm">
</span>
<span id="execution-results-POSTapi-visits--id--confirm" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-visits--id--confirm"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-visits--id--confirm"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-visits--id--confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-visits--id--confirm">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-visits--id--confirm" data-method="POST"
      data-path="api/visits/{id}/confirm"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-visits--id--confirm', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-visits--id--confirm"
                    onclick="tryItOut('POSTapi-visits--id--confirm');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-visits--id--confirm"
                    onclick="cancelTryOut('POSTapi-visits--id--confirm');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-visits--id--confirm"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/visits/{id}/confirm</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-visits--id--confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-visits--id--confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-visits--id--confirm"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the visit. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-visits--id--cancel">Annuler une visite (par l&#039;utilisateur).</h2>

<p>
</p>



<span id="example-requests-POSTapi-visits--id--cancel">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/visits/architecto/cancel" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/visits/architecto/cancel"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-visits--id--cancel">
</span>
<span id="execution-results-POSTapi-visits--id--cancel" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-visits--id--cancel"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-visits--id--cancel"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-visits--id--cancel" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-visits--id--cancel">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-visits--id--cancel" data-method="POST"
      data-path="api/visits/{id}/cancel"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-visits--id--cancel', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-visits--id--cancel"
                    onclick="tryItOut('POSTapi-visits--id--cancel');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-visits--id--cancel"
                    onclick="cancelTryOut('POSTapi-visits--id--cancel');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-visits--id--cancel"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/visits/{id}/cancel</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-visits--id--cancel"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-visits--id--cancel"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-visits--id--cancel"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the visit. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-rental-applications">Liste des dossiers de l&#039;utilisateur connecté.</h2>

<p>
</p>



<span id="example-requests-GETapi-rental-applications">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/rental-applications" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/rental-applications"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-rental-applications">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-rental-applications" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-rental-applications"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-rental-applications"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-rental-applications" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-rental-applications">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-rental-applications" data-method="GET"
      data-path="api/rental-applications"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-rental-applications', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-rental-applications"
                    onclick="tryItOut('GETapi-rental-applications');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-rental-applications"
                    onclick="cancelTryOut('GETapi-rental-applications');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-rental-applications"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/rental-applications</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-rental-applications"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-rental-applications"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-rental-applications">Soumettre un dossier de candidature.</h2>

<p>
</p>

<p>Prérequis : la visite liée doit être "completed".</p>

<span id="example-requests-POSTapi-rental-applications">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/rental-applications" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "property_id=architecto"\
    --form "visit_id=architecto"\
    --form "situation_professionnelle=architecto"\
    --form "revenus_mensuels=39"\
    --form "has_garant=1"\
    --form "notes=architecto"\
    --form "documents[][type]=architecto"\
    --form "documents[][file]=@C:\Users\DELL\AppData\Local\Temp\php3F1B.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/rental-applications"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('property_id', 'architecto');
body.append('visit_id', 'architecto');
body.append('situation_professionnelle', 'architecto');
body.append('revenus_mensuels', '39');
body.append('has_garant', '1');
body.append('notes', 'architecto');
body.append('documents[][type]', 'architecto');
body.append('documents[][file]', document.querySelector('input[name="documents[][file]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-rental-applications">
</span>
<span id="execution-results-POSTapi-rental-applications" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-rental-applications"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-rental-applications"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-rental-applications" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-rental-applications">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-rental-applications" data-method="POST"
      data-path="api/rental-applications"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-rental-applications', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-rental-applications"
                    onclick="tryItOut('POSTapi-rental-applications');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-rental-applications"
                    onclick="cancelTryOut('POSTapi-rental-applications');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-rental-applications"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/rental-applications</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-rental-applications"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-rental-applications"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>property_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="property_id"                data-endpoint="POSTapi-rental-applications"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the properties table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>visit_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="visit_id"                data-endpoint="POSTapi-rental-applications"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the visits table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>situation_professionnelle</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="situation_professionnelle"                data-endpoint="POSTapi-rental-applications"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>revenus_mensuels</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="revenus_mensuels"                data-endpoint="POSTapi-rental-applications"
               value="39"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>39</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>has_garant</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-rental-applications" style="display: none">
            <input type="radio" name="has_garant"
                   value="true"
                   data-endpoint="POSTapi-rental-applications"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-rental-applications" style="display: none">
            <input type="radio" name="has_garant"
                   value="false"
                   data-endpoint="POSTapi-rental-applications"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-rental-applications"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>documents</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="documents.0.type"                data-endpoint="POSTapi-rental-applications"
               value="architecto"
               data-component="body">
    <br>
<p>This field is required when <code>documents</code> is present. Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>file</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="documents.0.file"                data-endpoint="POSTapi-rental-applications"
               value=""
               data-component="body">
    <br>
<p>This field is required when <code>documents</code> is present. Must be a file. Must not be greater than 5120 kilobytes. Example: <code>C:\Users\DELL\AppData\Local\Temp\php3F1B.tmp</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-rental-applications--id-">Détail d&#039;un dossier.</h2>

<p>
</p>



<span id="example-requests-GETapi-rental-applications--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/rental-applications/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/rental-applications/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-rental-applications--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-rental-applications--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-rental-applications--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-rental-applications--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-rental-applications--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-rental-applications--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-rental-applications--id-" data-method="GET"
      data-path="api/rental-applications/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-rental-applications--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-rental-applications--id-"
                    onclick="tryItOut('GETapi-rental-applications--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-rental-applications--id-"
                    onclick="cancelTryOut('GETapi-rental-applications--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-rental-applications--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/rental-applications/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-rental-applications--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-rental-applications--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-rental-applications--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the rental application. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-rental-applications--id--sign">L&#039;utilisateur signe le contrat de bail pré-rempli.</h2>

<p>
</p>



<span id="example-requests-POSTapi-rental-applications--id--sign">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/rental-applications/architecto/sign" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/rental-applications/architecto/sign"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-rental-applications--id--sign">
</span>
<span id="execution-results-POSTapi-rental-applications--id--sign" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-rental-applications--id--sign"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-rental-applications--id--sign"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-rental-applications--id--sign" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-rental-applications--id--sign">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-rental-applications--id--sign" data-method="POST"
      data-path="api/rental-applications/{id}/sign"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-rental-applications--id--sign', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-rental-applications--id--sign"
                    onclick="tryItOut('POSTapi-rental-applications--id--sign');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-rental-applications--id--sign"
                    onclick="cancelTryOut('POSTapi-rental-applications--id--sign');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-rental-applications--id--sign"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/rental-applications/{id}/sign</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-rental-applications--id--sign"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-rental-applications--id--sign"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-rental-applications--id--sign"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the rental application. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-prospect-visits">Lister les visites du prospect connecté.</h2>

<p>
</p>

<p>GET /api/prospect/visits</p>

<span id="example-requests-GETapi-prospect-visits">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/prospect/visits" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/prospect/visits"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-prospect-visits">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-prospect-visits" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-prospect-visits"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-prospect-visits"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-prospect-visits" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-prospect-visits">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-prospect-visits" data-method="GET"
      data-path="api/prospect/visits"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-prospect-visits', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-prospect-visits"
                    onclick="tryItOut('GETapi-prospect-visits');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-prospect-visits"
                    onclick="cancelTryOut('GETapi-prospect-visits');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-prospect-visits"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/prospect/visits</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-prospect-visits"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-prospect-visits"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-prospect-visits">Réserver une visite pour un bien.</h2>

<p>
</p>

<p>POST /api/prospect/visits</p>

<span id="example-requests-POSTapi-prospect-visits">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/prospect/visits" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"property_id\": 16,
    \"scheduled_at\": \"2052-04-19\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/prospect/visits"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "property_id": 16,
    "scheduled_at": "2052-04-19"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-prospect-visits">
</span>
<span id="execution-results-POSTapi-prospect-visits" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-prospect-visits"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-prospect-visits"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-prospect-visits" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-prospect-visits">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-prospect-visits" data-method="POST"
      data-path="api/prospect/visits"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-prospect-visits', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-prospect-visits"
                    onclick="tryItOut('POSTapi-prospect-visits');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-prospect-visits"
                    onclick="cancelTryOut('POSTapi-prospect-visits');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-prospect-visits"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/prospect/visits</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-prospect-visits"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-prospect-visits"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>property_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="property_id"                data-endpoint="POSTapi-prospect-visits"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the properties table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>scheduled_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="scheduled_at"                data-endpoint="POSTapi-prospect-visits"
               value="2052-04-19"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>now</code>. Example: <code>2052-04-19</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-prospect-visits--id--pay">Payer les frais de visite via NotchPay.</h2>

<p>
</p>

<p>POST /api/prospect/visits/{id}/pay</p>

<span id="example-requests-POSTapi-prospect-visits--id--pay">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/prospect/visits/architecto/pay" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/prospect/visits/architecto/pay"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-prospect-visits--id--pay">
</span>
<span id="execution-results-POSTapi-prospect-visits--id--pay" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-prospect-visits--id--pay"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-prospect-visits--id--pay"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-prospect-visits--id--pay" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-prospect-visits--id--pay">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-prospect-visits--id--pay" data-method="POST"
      data-path="api/prospect/visits/{id}/pay"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-prospect-visits--id--pay', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-prospect-visits--id--pay"
                    onclick="tryItOut('POSTapi-prospect-visits--id--pay');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-prospect-visits--id--pay"
                    onclick="cancelTryOut('POSTapi-prospect-visits--id--pay');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-prospect-visits--id--pay"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/prospect/visits/{id}/pay</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-prospect-visits--id--pay"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-prospect-visits--id--pay"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-prospect-visits--id--pay"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the visit. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-prospect-visits--id--confirm">Confirmer la visite du côté du prospect (après que la visite a eu lieu).</h2>

<p>
</p>

<p>POST /api/prospect/visits/{id}/confirm</p>

<span id="example-requests-POSTapi-prospect-visits--id--confirm">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/prospect/visits/architecto/confirm" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/prospect/visits/architecto/confirm"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-prospect-visits--id--confirm">
</span>
<span id="execution-results-POSTapi-prospect-visits--id--confirm" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-prospect-visits--id--confirm"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-prospect-visits--id--confirm"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-prospect-visits--id--confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-prospect-visits--id--confirm">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-prospect-visits--id--confirm" data-method="POST"
      data-path="api/prospect/visits/{id}/confirm"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-prospect-visits--id--confirm', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-prospect-visits--id--confirm"
                    onclick="tryItOut('POSTapi-prospect-visits--id--confirm');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-prospect-visits--id--confirm"
                    onclick="cancelTryOut('POSTapi-prospect-visits--id--confirm');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-prospect-visits--id--confirm"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/prospect/visits/{id}/confirm</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-prospect-visits--id--confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-prospect-visits--id--confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-prospect-visits--id--confirm"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the visit. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-prospect-visits--id--cancel">Annuler une visite (avant qu&#039;elle ait lieu).</h2>

<p>
</p>

<p>POST /api/prospect/visits/{id}/cancel</p>

<span id="example-requests-POSTapi-prospect-visits--id--cancel">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/prospect/visits/architecto/cancel" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/prospect/visits/architecto/cancel"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-prospect-visits--id--cancel">
</span>
<span id="execution-results-POSTapi-prospect-visits--id--cancel" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-prospect-visits--id--cancel"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-prospect-visits--id--cancel"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-prospect-visits--id--cancel" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-prospect-visits--id--cancel">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-prospect-visits--id--cancel" data-method="POST"
      data-path="api/prospect/visits/{id}/cancel"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-prospect-visits--id--cancel', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-prospect-visits--id--cancel"
                    onclick="tryItOut('POSTapi-prospect-visits--id--cancel');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-prospect-visits--id--cancel"
                    onclick="cancelTryOut('POSTapi-prospect-visits--id--cancel');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-prospect-visits--id--cancel"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/prospect/visits/{id}/cancel</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-prospect-visits--id--cancel"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-prospect-visits--id--cancel"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-prospect-visits--id--cancel"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the visit. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-prospect-applications">Lister tous les dossiers du prospect.</h2>

<p>
</p>

<p>GET /api/prospect/applications</p>

<span id="example-requests-GETapi-prospect-applications">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/prospect/applications" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/prospect/applications"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-prospect-applications">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-prospect-applications" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-prospect-applications"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-prospect-applications"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-prospect-applications" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-prospect-applications">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-prospect-applications" data-method="GET"
      data-path="api/prospect/applications"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-prospect-applications', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-prospect-applications"
                    onclick="tryItOut('GETapi-prospect-applications');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-prospect-applications"
                    onclick="cancelTryOut('GETapi-prospect-applications');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-prospect-applications"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/prospect/applications</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-prospect-applications"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-prospect-applications"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-prospect-applications">Créer un dossier de candidature (après visite confirmée).</h2>

<p>
</p>

<p>POST /api/prospect/applications</p>

<span id="example-requests-POSTapi-prospect-applications">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/prospect/applications" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"visit_id\": 16,
    \"situation_professionnelle\": \"sans_emploi\",
    \"revenus_mensuels\": 39,
    \"has_garant\": false,
    \"notes\": \"g\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/prospect/applications"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "visit_id": 16,
    "situation_professionnelle": "sans_emploi",
    "revenus_mensuels": 39,
    "has_garant": false,
    "notes": "g"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-prospect-applications">
</span>
<span id="execution-results-POSTapi-prospect-applications" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-prospect-applications"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-prospect-applications"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-prospect-applications" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-prospect-applications">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-prospect-applications" data-method="POST"
      data-path="api/prospect/applications"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-prospect-applications', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-prospect-applications"
                    onclick="tryItOut('POSTapi-prospect-applications');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-prospect-applications"
                    onclick="cancelTryOut('POSTapi-prospect-applications');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-prospect-applications"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/prospect/applications</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-prospect-applications"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-prospect-applications"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>visit_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="visit_id"                data-endpoint="POSTapi-prospect-applications"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the visits table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>situation_professionnelle</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="situation_professionnelle"                data-endpoint="POSTapi-prospect-applications"
               value="sans_emploi"
               data-component="body">
    <br>
<p>Example: <code>sans_emploi</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>cdi</code></li> <li><code>cdd</code></li> <li><code>independant</code></li> <li><code>etudiant</code></li> <li><code>retraite</code></li> <li><code>sans_emploi</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>revenus_mensuels</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="revenus_mensuels"                data-endpoint="POSTapi-prospect-applications"
               value="39"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>39</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>has_garant</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-prospect-applications" style="display: none">
            <input type="radio" name="has_garant"
                   value="true"
                   data-endpoint="POSTapi-prospect-applications"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-prospect-applications" style="display: none">
            <input type="radio" name="has_garant"
                   value="false"
                   data-endpoint="POSTapi-prospect-applications"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-prospect-applications"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 1000 characters. Example: <code>g</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-prospect-applications--id-">Voir le détail de son dossier de candidature.</h2>

<p>
</p>

<p>GET /api/prospect/applications/{id}</p>

<span id="example-requests-GETapi-prospect-applications--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/prospect/applications/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/prospect/applications/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-prospect-applications--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-prospect-applications--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-prospect-applications--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-prospect-applications--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-prospect-applications--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-prospect-applications--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-prospect-applications--id-" data-method="GET"
      data-path="api/prospect/applications/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-prospect-applications--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-prospect-applications--id-"
                    onclick="tryItOut('GETapi-prospect-applications--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-prospect-applications--id-"
                    onclick="cancelTryOut('GETapi-prospect-applications--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-prospect-applications--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/prospect/applications/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-prospect-applications--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-prospect-applications--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-prospect-applications--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the application. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-prospect-applications--id-">Mettre à jour son dossier (upload documents, signer contrat).</h2>

<p>
</p>

<p>PUT /api/prospect/applications/{id}</p>

<span id="example-requests-PUTapi-prospect-applications--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/prospect/applications/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"situation_professionnelle\": \"etudiant\",
    \"revenus_mensuels\": 27,
    \"has_garant\": true,
    \"notes\": \"n\",
    \"signed_by_applicant\": true,
    \"documents\": [
        {
            \"type\": \"architecto\",
            \"path\": \"architecto\"
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/prospect/applications/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "situation_professionnelle": "etudiant",
    "revenus_mensuels": 27,
    "has_garant": true,
    "notes": "n",
    "signed_by_applicant": true,
    "documents": [
        {
            "type": "architecto",
            "path": "architecto"
        }
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-prospect-applications--id-">
</span>
<span id="execution-results-PUTapi-prospect-applications--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-prospect-applications--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-prospect-applications--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-prospect-applications--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-prospect-applications--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-prospect-applications--id-" data-method="PUT"
      data-path="api/prospect/applications/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-prospect-applications--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-prospect-applications--id-"
                    onclick="tryItOut('PUTapi-prospect-applications--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-prospect-applications--id-"
                    onclick="cancelTryOut('PUTapi-prospect-applications--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-prospect-applications--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/prospect/applications/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-prospect-applications--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-prospect-applications--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-prospect-applications--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the application. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>situation_professionnelle</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="situation_professionnelle"                data-endpoint="PUTapi-prospect-applications--id-"
               value="etudiant"
               data-component="body">
    <br>
<p>Example: <code>etudiant</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>cdi</code></li> <li><code>cdd</code></li> <li><code>independant</code></li> <li><code>etudiant</code></li> <li><code>retraite</code></li> <li><code>sans_emploi</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>revenus_mensuels</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="revenus_mensuels"                data-endpoint="PUTapi-prospect-applications--id-"
               value="27"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>27</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>has_garant</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-prospect-applications--id-" style="display: none">
            <input type="radio" name="has_garant"
                   value="true"
                   data-endpoint="PUTapi-prospect-applications--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-prospect-applications--id-" style="display: none">
            <input type="radio" name="has_garant"
                   value="false"
                   data-endpoint="PUTapi-prospect-applications--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="PUTapi-prospect-applications--id-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 1000 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>signed_by_applicant</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-prospect-applications--id-" style="display: none">
            <input type="radio" name="signed_by_applicant"
                   value="true"
                   data-endpoint="PUTapi-prospect-applications--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-prospect-applications--id-" style="display: none">
            <input type="radio" name="signed_by_applicant"
                   value="false"
                   data-endpoint="PUTapi-prospect-applications--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>documents</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="documents.0.type"                data-endpoint="PUTapi-prospect-applications--id-"
               value="architecto"
               data-component="body">
    <br>
<p>This field is required when <code>documents</code> is present. Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>path</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="documents.0.path"                data-endpoint="PUTapi-prospect-applications--id-"
               value="architecto"
               data-component="body">
    <br>
<p>This field is required when <code>documents</code> is present. Example: <code>architecto</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-prospect-rentals">Voir tous ses contrats (locations).</h2>

<p>
</p>

<p>GET /api/prospect/rentals</p>

<span id="example-requests-GETapi-prospect-rentals">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/prospect/rentals" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/prospect/rentals"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-prospect-rentals">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-prospect-rentals" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-prospect-rentals"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-prospect-rentals"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-prospect-rentals" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-prospect-rentals">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-prospect-rentals" data-method="GET"
      data-path="api/prospect/rentals"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-prospect-rentals', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-prospect-rentals"
                    onclick="tryItOut('GETapi-prospect-rentals');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-prospect-rentals"
                    onclick="cancelTryOut('GETapi-prospect-rentals');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-prospect-rentals"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/prospect/rentals</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-prospect-rentals"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-prospect-rentals"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-prospect-rentals--id-">Voir son contrat de location en cours (Phase 3).</h2>

<p>
</p>

<p>GET /api/prospect/rentals/{id}</p>

<span id="example-requests-GETapi-prospect-rentals--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/prospect/rentals/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/prospect/rentals/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-prospect-rentals--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-prospect-rentals--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-prospect-rentals--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-prospect-rentals--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-prospect-rentals--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-prospect-rentals--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-prospect-rentals--id-" data-method="GET"
      data-path="api/prospect/rentals/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-prospect-rentals--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-prospect-rentals--id-"
                    onclick="tryItOut('GETapi-prospect-rentals--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-prospect-rentals--id-"
                    onclick="cancelTryOut('GETapi-prospect-rentals--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-prospect-rentals--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/prospect/rentals/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-prospect-rentals--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-prospect-rentals--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-prospect-rentals--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the rental. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-prospect-rentals--id--pay-initial">Effectuer/Signaler le paiement initial.</h2>

<p>
</p>

<p>POST /api/prospect/rentals/{id}/pay-initial</p>

<span id="example-requests-POSTapi-prospect-rentals--id--pay-initial">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/prospect/rentals/architecto/pay-initial" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/prospect/rentals/architecto/pay-initial"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-prospect-rentals--id--pay-initial">
</span>
<span id="execution-results-POSTapi-prospect-rentals--id--pay-initial" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-prospect-rentals--id--pay-initial"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-prospect-rentals--id--pay-initial"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-prospect-rentals--id--pay-initial" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-prospect-rentals--id--pay-initial">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-prospect-rentals--id--pay-initial" data-method="POST"
      data-path="api/prospect/rentals/{id}/pay-initial"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-prospect-rentals--id--pay-initial', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-prospect-rentals--id--pay-initial"
                    onclick="tryItOut('POSTapi-prospect-rentals--id--pay-initial');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-prospect-rentals--id--pay-initial"
                    onclick="cancelTryOut('POSTapi-prospect-rentals--id--pay-initial');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-prospect-rentals--id--pay-initial"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/prospect/rentals/{id}/pay-initial</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-prospect-rentals--id--pay-initial"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-prospect-rentals--id--pay-initial"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-prospect-rentals--id--pay-initial"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the rental. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-bailleur-dashboard">Dashboard stats du bailleur connecté
GET /api/bailleur/dashboard</h2>

<p>
</p>



<span id="example-requests-GETapi-bailleur-dashboard">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/bailleur/dashboard" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bailleur/dashboard"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-bailleur-dashboard">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-bailleur-dashboard" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-bailleur-dashboard"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-bailleur-dashboard"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-bailleur-dashboard" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-bailleur-dashboard">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-bailleur-dashboard" data-method="GET"
      data-path="api/bailleur/dashboard"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-bailleur-dashboard', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-bailleur-dashboard"
                    onclick="tryItOut('GETapi-bailleur-dashboard');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-bailleur-dashboard"
                    onclick="cancelTryOut('GETapi-bailleur-dashboard');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-bailleur-dashboard"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/bailleur/dashboard</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-bailleur-dashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-bailleur-dashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-bailleur-properties">Liste complète des biens du bailleur (avec pagination)
GET /api/bailleur/properties</h2>

<p>
</p>



<span id="example-requests-GETapi-bailleur-properties">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/bailleur/properties" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bailleur/properties"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-bailleur-properties">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-bailleur-properties" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-bailleur-properties"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-bailleur-properties"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-bailleur-properties" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-bailleur-properties">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-bailleur-properties" data-method="GET"
      data-path="api/bailleur/properties"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-bailleur-properties', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-bailleur-properties"
                    onclick="tryItOut('GETapi-bailleur-properties');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-bailleur-properties"
                    onclick="cancelTryOut('GETapi-bailleur-properties');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-bailleur-properties"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/bailleur/properties</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-bailleur-properties"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-bailleur-properties"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-bailleur-profile">Profil du bailleur connecté
GET /api/bailleur/profile</h2>

<p>
</p>



<span id="example-requests-GETapi-bailleur-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/bailleur/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bailleur/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-bailleur-profile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-bailleur-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-bailleur-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-bailleur-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-bailleur-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-bailleur-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-bailleur-profile" data-method="GET"
      data-path="api/bailleur/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-bailleur-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-bailleur-profile"
                    onclick="tryItOut('GETapi-bailleur-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-bailleur-profile"
                    onclick="cancelTryOut('GETapi-bailleur-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-bailleur-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/bailleur/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-bailleur-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-bailleur-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PUTapi-bailleur-profile">Mise à jour du profil
PUT /api/bailleur/profile</h2>

<p>
</p>



<span id="example-requests-PUTapi-bailleur-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/bailleur/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"phone\": \"ngzmiyvdljnikhwa\",
    \"city\": \"y\",
    \"bio\": \"k\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bailleur/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "phone": "ngzmiyvdljnikhwa",
    "city": "y",
    "bio": "k"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-bailleur-profile">
</span>
<span id="execution-results-PUTapi-bailleur-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-bailleur-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-bailleur-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-bailleur-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-bailleur-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-bailleur-profile" data-method="PUT"
      data-path="api/bailleur/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-bailleur-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-bailleur-profile"
                    onclick="tryItOut('PUTapi-bailleur-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-bailleur-profile"
                    onclick="cancelTryOut('PUTapi-bailleur-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-bailleur-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/bailleur/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-bailleur-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-bailleur-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-bailleur-profile"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="PUTapi-bailleur-profile"
               value="ngzmiyvdljnikhwa"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>ngzmiyvdljnikhwa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city"                data-endpoint="PUTapi-bailleur-profile"
               value="y"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>y</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bio</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bio"                data-endpoint="PUTapi-bailleur-profile"
               value="k"
               data-component="body">
    <br>
<p>Must not be greater than 500 characters. Example: <code>k</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-bailleur-visits">Liste des visites pour le bailleur — LECTURE SEULE (sans identité prospect).</h2>

<p>
</p>

<p>GET /api/bailleur/visits</p>

<span id="example-requests-GETapi-bailleur-visits">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/bailleur/visits" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bailleur/visits"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-bailleur-visits">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-bailleur-visits" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-bailleur-visits"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-bailleur-visits"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-bailleur-visits" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-bailleur-visits">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-bailleur-visits" data-method="GET"
      data-path="api/bailleur/visits"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-bailleur-visits', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-bailleur-visits"
                    onclick="tryItOut('GETapi-bailleur-visits');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-bailleur-visits"
                    onclick="cancelTryOut('GETapi-bailleur-visits');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-bailleur-visits"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/bailleur/visits</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-bailleur-visits"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-bailleur-visits"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-bailleur-interventions">Liste des interventions pour le bailleur</h2>

<p>
</p>



<span id="example-requests-GETapi-bailleur-interventions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/bailleur/interventions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bailleur/interventions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-bailleur-interventions">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-bailleur-interventions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-bailleur-interventions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-bailleur-interventions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-bailleur-interventions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-bailleur-interventions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-bailleur-interventions" data-method="GET"
      data-path="api/bailleur/interventions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-bailleur-interventions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-bailleur-interventions"
                    onclick="tryItOut('GETapi-bailleur-interventions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-bailleur-interventions"
                    onclick="cancelTryOut('GETapi-bailleur-interventions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-bailleur-interventions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/bailleur/interventions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-bailleur-interventions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-bailleur-interventions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-bailleur-interventions--id--status">Mettre à jour le statut d&#039;une intervention</h2>

<p>
</p>



<span id="example-requests-POSTapi-bailleur-interventions--id--status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/bailleur/interventions/architecto/status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"cancelled\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bailleur/interventions/architecto/status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "cancelled"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-bailleur-interventions--id--status">
</span>
<span id="execution-results-POSTapi-bailleur-interventions--id--status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-bailleur-interventions--id--status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-bailleur-interventions--id--status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-bailleur-interventions--id--status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-bailleur-interventions--id--status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-bailleur-interventions--id--status" data-method="POST"
      data-path="api/bailleur/interventions/{id}/status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-bailleur-interventions--id--status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-bailleur-interventions--id--status"
                    onclick="tryItOut('POSTapi-bailleur-interventions--id--status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-bailleur-interventions--id--status"
                    onclick="cancelTryOut('POSTapi-bailleur-interventions--id--status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-bailleur-interventions--id--status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/bailleur/interventions/{id}/status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-bailleur-interventions--id--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-bailleur-interventions--id--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-bailleur-interventions--id--status"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the intervention. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-bailleur-interventions--id--status"
               value="cancelled"
               data-component="body">
    <br>
<p>Example: <code>cancelled</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>in_progress</code></li> <li><code>completed</code></li> <li><code>cancelled</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-bailleur-finances">Rapport financier du bailleur
GET /api/bailleur/finances</h2>

<p>
</p>



<span id="example-requests-GETapi-bailleur-finances">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/bailleur/finances" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bailleur/finances"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-bailleur-finances">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-bailleur-finances" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-bailleur-finances"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-bailleur-finances"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-bailleur-finances" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-bailleur-finances">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-bailleur-finances" data-method="GET"
      data-path="api/bailleur/finances"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-bailleur-finances', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-bailleur-finances"
                    onclick="tryItOut('GETapi-bailleur-finances');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-bailleur-finances"
                    onclick="cancelTryOut('GETapi-bailleur-finances');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-bailleur-finances"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/bailleur/finances</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-bailleur-finances"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-bailleur-finances"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-bailleur-rentals">Create a new rental manualy by the landlord
POST /api/bailleur/rentals</h2>

<p>
</p>



<span id="example-requests-POSTapi-bailleur-rentals">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/bailleur/rentals" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"property_id\": \"architecto\",
    \"tenant_name\": \"n\",
    \"tenant_email\": \"ashly64@example.com\",
    \"tenant_phone\": \"architecto\",
    \"rent\": 4326.41688,
    \"start_date\": \"2026-03-27T10:54:13\",
    \"caution_months\": 16,
    \"advance_months\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bailleur/rentals"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "property_id": "architecto",
    "tenant_name": "n",
    "tenant_email": "ashly64@example.com",
    "tenant_phone": "architecto",
    "rent": 4326.41688,
    "start_date": "2026-03-27T10:54:13",
    "caution_months": 16,
    "advance_months": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-bailleur-rentals">
</span>
<span id="execution-results-POSTapi-bailleur-rentals" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-bailleur-rentals"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-bailleur-rentals"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-bailleur-rentals" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-bailleur-rentals">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-bailleur-rentals" data-method="POST"
      data-path="api/bailleur/rentals"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-bailleur-rentals', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-bailleur-rentals"
                    onclick="tryItOut('POSTapi-bailleur-rentals');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-bailleur-rentals"
                    onclick="cancelTryOut('POSTapi-bailleur-rentals');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-bailleur-rentals"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/bailleur/rentals</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-bailleur-rentals"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-bailleur-rentals"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>property_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="property_id"                data-endpoint="POSTapi-bailleur-rentals"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the properties table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tenant_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tenant_name"                data-endpoint="POSTapi-bailleur-rentals"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tenant_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tenant_email"                data-endpoint="POSTapi-bailleur-rentals"
               value="ashly64@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>ashly64@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tenant_phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tenant_phone"                data-endpoint="POSTapi-bailleur-rentals"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rent</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rent"                data-endpoint="POSTapi-bailleur-rentals"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="POSTapi-bailleur-rentals"
               value="2026-03-27T10:54:13"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-03-27T10:54:13</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>caution_months</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="caution_months"                data-endpoint="POSTapi-bailleur-rentals"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>advance_months</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="advance_months"                data-endpoint="POSTapi-bailleur-rentals"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-bailleur-properties--id--rental-status">Statut du processus locatif pour un bien donné — LECTURE SEULE.</h2>

<p>
</p>

<p>Le bailleur observe l'avancement sans pouvoir intervenir.
GET /api/bailleur/properties/{id}/rental-status</p>

<span id="example-requests-GETapi-bailleur-properties--id--rental-status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/bailleur/properties/1/rental-status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bailleur/properties/1/rental-status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-bailleur-properties--id--rental-status">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-bailleur-properties--id--rental-status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-bailleur-properties--id--rental-status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-bailleur-properties--id--rental-status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-bailleur-properties--id--rental-status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-bailleur-properties--id--rental-status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-bailleur-properties--id--rental-status" data-method="GET"
      data-path="api/bailleur/properties/{id}/rental-status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-bailleur-properties--id--rental-status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-bailleur-properties--id--rental-status"
                    onclick="tryItOut('GETapi-bailleur-properties--id--rental-status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-bailleur-properties--id--rental-status"
                    onclick="cancelTryOut('GETapi-bailleur-properties--id--rental-status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-bailleur-properties--id--rental-status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/bailleur/properties/{id}/rental-status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-bailleur-properties--id--rental-status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-bailleur-properties--id--rental-status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-bailleur-properties--id--rental-status"
               value="1"
               data-component="url">
    <br>
<p>The ID of the property. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-bailleur-publication-requests">Mes demandes de publication (audit terrain)
GET /api/bailleur/publication-requests</h2>

<p>
</p>



<span id="example-requests-GETapi-bailleur-publication-requests">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/bailleur/publication-requests" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bailleur/publication-requests"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-bailleur-publication-requests">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-bailleur-publication-requests" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-bailleur-publication-requests"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-bailleur-publication-requests"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-bailleur-publication-requests" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-bailleur-publication-requests">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-bailleur-publication-requests" data-method="GET"
      data-path="api/bailleur/publication-requests"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-bailleur-publication-requests', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-bailleur-publication-requests"
                    onclick="tryItOut('GETapi-bailleur-publication-requests');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-bailleur-publication-requests"
                    onclick="cancelTryOut('GETapi-bailleur-publication-requests');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-bailleur-publication-requests"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/bailleur/publication-requests</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-bailleur-publication-requests"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-bailleur-publication-requests"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-bailleur-publication-requests">Soumettre une demande de publication (Phase 0 Audit)
POST /api/bailleur/publication-requests</h2>

<p>
</p>



<span id="example-requests-POSTapi-bailleur-publication-requests">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/bailleur/publication-requests" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "title=b"\
    --form "type=sale"\
    --form "category=architecto"\
    --form "price_estimate=4326.41688"\
    --form "city=architecto"\
    --form "location=architecto"\
    --form "description=Eius et animi quos velit et."\
    --form "bedrooms=16"\
    --form "bathrooms=16"\
    --form "area=4326.41688"\
    --form "documents[]=@C:\Users\DELL\AppData\Local\Temp\php40C2.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bailleur/publication-requests"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('title', 'b');
body.append('type', 'sale');
body.append('category', 'architecto');
body.append('price_estimate', '4326.41688');
body.append('city', 'architecto');
body.append('location', 'architecto');
body.append('description', 'Eius et animi quos velit et.');
body.append('bedrooms', '16');
body.append('bathrooms', '16');
body.append('area', '4326.41688');
body.append('documents[]', document.querySelector('input[name="documents[]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-bailleur-publication-requests">
</span>
<span id="execution-results-POSTapi-bailleur-publication-requests" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-bailleur-publication-requests"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-bailleur-publication-requests"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-bailleur-publication-requests" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-bailleur-publication-requests">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-bailleur-publication-requests" data-method="POST"
      data-path="api/bailleur/publication-requests"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-bailleur-publication-requests', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-bailleur-publication-requests"
                    onclick="tryItOut('POSTapi-bailleur-publication-requests');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-bailleur-publication-requests"
                    onclick="cancelTryOut('POSTapi-bailleur-publication-requests');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-bailleur-publication-requests"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/bailleur/publication-requests</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-bailleur-publication-requests"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-bailleur-publication-requests"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-bailleur-publication-requests"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-bailleur-publication-requests"
               value="sale"
               data-component="body">
    <br>
<p>Example: <code>sale</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>rent</code></li> <li><code>sale</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="POSTapi-bailleur-publication-requests"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price_estimate</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price_estimate"                data-endpoint="POSTapi-bailleur-publication-requests"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city"                data-endpoint="POSTapi-bailleur-publication-requests"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="location"                data-endpoint="POSTapi-bailleur-publication-requests"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-bailleur-publication-requests"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bedrooms</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="bedrooms"                data-endpoint="POSTapi-bailleur-publication-requests"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bathrooms</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="bathrooms"                data-endpoint="POSTapi-bailleur-publication-requests"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>area</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="area"                data-endpoint="POSTapi-bailleur-publication-requests"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>documents</code></b>&nbsp;&nbsp;
<small>file[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="documents[0]"                data-endpoint="POSTapi-bailleur-publication-requests"
               data-component="body">
        <input type="file" style="display: none"
               name="documents[1]"                data-endpoint="POSTapi-bailleur-publication-requests"
               data-component="body">
    <br>
<p>Must be a file. Must not be greater than 10240 kilobytes.</p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-tenant-dashboard">Dashboard Statistics</h2>

<p>
</p>



<span id="example-requests-GETapi-tenant-dashboard">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/tenant/dashboard" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tenant/dashboard"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tenant-dashboard">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tenant-dashboard" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tenant-dashboard"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tenant-dashboard"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tenant-dashboard" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tenant-dashboard">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tenant-dashboard" data-method="GET"
      data-path="api/tenant/dashboard"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tenant-dashboard', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tenant-dashboard"
                    onclick="tryItOut('GETapi-tenant-dashboard');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tenant-dashboard"
                    onclick="cancelTryOut('GETapi-tenant-dashboard');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tenant-dashboard"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tenant/dashboard</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tenant-dashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tenant-dashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-tenant-rentals">List all rentals</h2>

<p>
</p>



<span id="example-requests-GETapi-tenant-rentals">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/tenant/rentals" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tenant/rentals"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tenant-rentals">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tenant-rentals" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tenant-rentals"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tenant-rentals"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tenant-rentals" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tenant-rentals">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tenant-rentals" data-method="GET"
      data-path="api/tenant/rentals"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tenant-rentals', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tenant-rentals"
                    onclick="tryItOut('GETapi-tenant-rentals');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tenant-rentals"
                    onclick="cancelTryOut('GETapi-tenant-rentals');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tenant-rentals"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tenant/rentals</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tenant-rentals"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tenant-rentals"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-tenant-payments">List all payments/transactions</h2>

<p>
</p>



<span id="example-requests-GETapi-tenant-payments">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/tenant/payments" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tenant/payments"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tenant-payments">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tenant-payments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tenant-payments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tenant-payments"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tenant-payments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tenant-payments">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tenant-payments" data-method="GET"
      data-path="api/tenant/payments"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tenant-payments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tenant-payments"
                    onclick="tryItOut('GETapi-tenant-payments');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tenant-payments"
                    onclick="cancelTryOut('GETapi-tenant-payments');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tenant-payments"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tenant/payments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tenant-payments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tenant-payments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-tenant-interventions">Get list of interventions</h2>

<p>
</p>



<span id="example-requests-GETapi-tenant-interventions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/tenant/interventions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tenant/interventions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tenant-interventions">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tenant-interventions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tenant-interventions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tenant-interventions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tenant-interventions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tenant-interventions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tenant-interventions" data-method="GET"
      data-path="api/tenant/interventions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tenant-interventions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tenant-interventions"
                    onclick="tryItOut('GETapi-tenant-interventions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tenant-interventions"
                    onclick="cancelTryOut('GETapi-tenant-interventions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tenant-interventions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tenant/interventions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tenant-interventions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tenant-interventions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-tenant-favorites">Get list of favorites</h2>

<p>
</p>



<span id="example-requests-GETapi-tenant-favorites">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/tenant/favorites" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tenant/favorites"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tenant-favorites">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tenant-favorites" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tenant-favorites"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tenant-favorites"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tenant-favorites" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tenant-favorites">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tenant-favorites" data-method="GET"
      data-path="api/tenant/favorites"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tenant-favorites', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tenant-favorites"
                    onclick="tryItOut('GETapi-tenant-favorites');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tenant-favorites"
                    onclick="cancelTryOut('GETapi-tenant-favorites');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tenant-favorites"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tenant/favorites</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tenant-favorites"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tenant-favorites"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-tenant-favorites-toggle">Toggle favorite</h2>

<p>
</p>



<span id="example-requests-POSTapi-tenant-favorites-toggle">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/tenant/favorites/toggle" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"property_id\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tenant/favorites/toggle"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "property_id": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-tenant-favorites-toggle">
</span>
<span id="execution-results-POSTapi-tenant-favorites-toggle" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-tenant-favorites-toggle"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tenant-favorites-toggle"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-tenant-favorites-toggle" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tenant-favorites-toggle">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-tenant-favorites-toggle" data-method="POST"
      data-path="api/tenant/favorites/toggle"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-tenant-favorites-toggle', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-tenant-favorites-toggle"
                    onclick="tryItOut('POSTapi-tenant-favorites-toggle');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-tenant-favorites-toggle"
                    onclick="cancelTryOut('POSTapi-tenant-favorites-toggle');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-tenant-favorites-toggle"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/tenant/favorites/toggle</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-tenant-favorites-toggle"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-tenant-favorites-toggle"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>property_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="property_id"                data-endpoint="POSTapi-tenant-favorites-toggle"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the properties table. Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-tenant-interventions">Create a new intervention request</h2>

<p>
</p>



<span id="example-requests-POSTapi-tenant-interventions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/tenant/interventions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"property_id\": \"architecto\",
    \"service_id\": \"architecto\",
    \"scheduled_at\": \"2052-04-19\",
    \"notes\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tenant/interventions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "property_id": "architecto",
    "service_id": "architecto",
    "scheduled_at": "2052-04-19",
    "notes": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-tenant-interventions">
</span>
<span id="execution-results-POSTapi-tenant-interventions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-tenant-interventions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tenant-interventions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-tenant-interventions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tenant-interventions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-tenant-interventions" data-method="POST"
      data-path="api/tenant/interventions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-tenant-interventions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-tenant-interventions"
                    onclick="tryItOut('POSTapi-tenant-interventions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-tenant-interventions"
                    onclick="cancelTryOut('POSTapi-tenant-interventions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-tenant-interventions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/tenant/interventions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-tenant-interventions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-tenant-interventions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>property_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="property_id"                data-endpoint="POSTapi-tenant-interventions"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the properties table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>service_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="service_id"                data-endpoint="POSTapi-tenant-interventions"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the services table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>scheduled_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="scheduled_at"                data-endpoint="POSTapi-tenant-interventions"
               value="2052-04-19"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>now</code>. Example: <code>2052-04-19</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-tenant-interventions"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-tenant-profile">Get tenant profile</h2>

<p>
</p>



<span id="example-requests-GETapi-tenant-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/tenant/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tenant/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tenant-profile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tenant-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tenant-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tenant-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tenant-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tenant-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tenant-profile" data-method="GET"
      data-path="api/tenant/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tenant-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tenant-profile"
                    onclick="tryItOut('GETapi-tenant-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tenant-profile"
                    onclick="cancelTryOut('GETapi-tenant-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tenant-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tenant/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tenant-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tenant-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PUTapi-tenant-profile">Update tenant profile</h2>

<p>
</p>



<span id="example-requests-PUTapi-tenant-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/tenant/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"phone\": \"ngzmiyvdljnikhwa\",
    \"city\": \"y\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tenant/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "phone": "ngzmiyvdljnikhwa",
    "city": "y"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-tenant-profile">
</span>
<span id="execution-results-PUTapi-tenant-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-tenant-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-tenant-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-tenant-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-tenant-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-tenant-profile" data-method="PUT"
      data-path="api/tenant/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-tenant-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-tenant-profile"
                    onclick="tryItOut('PUTapi-tenant-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-tenant-profile"
                    onclick="cancelTryOut('PUTapi-tenant-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-tenant-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/tenant/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-tenant-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-tenant-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-tenant-profile"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="PUTapi-tenant-profile"
               value="ngzmiyvdljnikhwa"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>ngzmiyvdljnikhwa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city"                data-endpoint="PUTapi-tenant-profile"
               value="y"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>y</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-tenant-book-visit">Book a property visit</h2>

<p>
</p>



<span id="example-requests-POSTapi-tenant-book-visit">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/tenant/book-visit" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"property_id\": \"architecto\",
    \"scheduled_at\": \"2052-04-19\",
    \"notes\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tenant/book-visit"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "property_id": "architecto",
    "scheduled_at": "2052-04-19",
    "notes": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-tenant-book-visit">
</span>
<span id="execution-results-POSTapi-tenant-book-visit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-tenant-book-visit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tenant-book-visit"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-tenant-book-visit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tenant-book-visit">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-tenant-book-visit" data-method="POST"
      data-path="api/tenant/book-visit"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-tenant-book-visit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-tenant-book-visit"
                    onclick="tryItOut('POSTapi-tenant-book-visit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-tenant-book-visit"
                    onclick="cancelTryOut('POSTapi-tenant-book-visit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-tenant-book-visit"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/tenant/book-visit</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-tenant-book-visit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-tenant-book-visit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>property_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="property_id"                data-endpoint="POSTapi-tenant-book-visit"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the properties table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>scheduled_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="scheduled_at"                data-endpoint="POSTapi-tenant-book-visit"
               value="2052-04-19"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>now</code>. Example: <code>2052-04-19</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-tenant-book-visit"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-tenant-apply">Apply for a rental</h2>

<p>
</p>



<span id="example-requests-POSTapi-tenant-apply">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/tenant/apply" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"property_id\": \"architecto\",
    \"start_date\": \"2052-04-19\",
    \"duration_months\": 22,
    \"notes\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tenant/apply"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "property_id": "architecto",
    "start_date": "2052-04-19",
    "duration_months": 22,
    "notes": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-tenant-apply">
</span>
<span id="execution-results-POSTapi-tenant-apply" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-tenant-apply"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tenant-apply"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-tenant-apply" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tenant-apply">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-tenant-apply" data-method="POST"
      data-path="api/tenant/apply"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-tenant-apply', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-tenant-apply"
                    onclick="tryItOut('POSTapi-tenant-apply');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-tenant-apply"
                    onclick="cancelTryOut('POSTapi-tenant-apply');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-tenant-apply"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/tenant/apply</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-tenant-apply"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-tenant-apply"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>property_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="property_id"                data-endpoint="POSTapi-tenant-apply"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the properties table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="POSTapi-tenant-apply"
               value="2052-04-19"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>today</code>. Example: <code>2052-04-19</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>duration_months</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="duration_months"                data-endpoint="POSTapi-tenant-apply"
               value="22"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>22</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-tenant-apply"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-agent-dashboard">GET api/agent/dashboard</h2>

<p>
</p>



<span id="example-requests-GETapi-agent-dashboard">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/agent/dashboard" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/dashboard"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-agent-dashboard">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-agent-dashboard" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-agent-dashboard"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-agent-dashboard"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-agent-dashboard" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-agent-dashboard">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-agent-dashboard" data-method="GET"
      data-path="api/agent/dashboard"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-agent-dashboard', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-agent-dashboard"
                    onclick="tryItOut('GETapi-agent-dashboard');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-agent-dashboard"
                    onclick="cancelTryOut('GETapi-agent-dashboard');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-agent-dashboard"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/agent/dashboard</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-agent-dashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-agent-dashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-agent-properties">GET api/agent/properties</h2>

<p>
</p>



<span id="example-requests-GETapi-agent-properties">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/agent/properties" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/properties"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-agent-properties">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-agent-properties" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-agent-properties"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-agent-properties"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-agent-properties" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-agent-properties">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-agent-properties" data-method="GET"
      data-path="api/agent/properties"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-agent-properties', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-agent-properties"
                    onclick="tryItOut('GETapi-agent-properties');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-agent-properties"
                    onclick="cancelTryOut('GETapi-agent-properties');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-agent-properties"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/agent/properties</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-agent-properties"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-agent-properties"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-agent-clients">GET api/agent/clients</h2>

<p>
</p>



<span id="example-requests-GETapi-agent-clients">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/agent/clients" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/clients"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-agent-clients">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-agent-clients" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-agent-clients"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-agent-clients"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-agent-clients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-agent-clients">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-agent-clients" data-method="GET"
      data-path="api/agent/clients"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-agent-clients', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-agent-clients"
                    onclick="tryItOut('GETapi-agent-clients');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-agent-clients"
                    onclick="cancelTryOut('GETapi-agent-clients');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-agent-clients"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/agent/clients</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-agent-clients"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-agent-clients"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-agent-missions">Missions de l&#039;agent (toutes les actions en attente)</h2>

<p>
</p>



<span id="example-requests-GETapi-agent-missions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/agent/missions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/missions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-agent-missions">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-agent-missions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-agent-missions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-agent-missions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-agent-missions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-agent-missions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-agent-missions" data-method="GET"
      data-path="api/agent/missions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-agent-missions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-agent-missions"
                    onclick="tryItOut('GETapi-agent-missions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-agent-missions"
                    onclick="cancelTryOut('GETapi-agent-missions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-agent-missions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/agent/missions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-agent-missions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-agent-missions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-agent-agenda">Agenda de l&#039;agent (visites confirmées à venir)</h2>

<p>
</p>



<span id="example-requests-GETapi-agent-agenda">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/agent/agenda" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/agenda"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-agent-agenda">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-agent-agenda" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-agent-agenda"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-agent-agenda"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-agent-agenda" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-agent-agenda">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-agent-agenda" data-method="GET"
      data-path="api/agent/agenda"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-agent-agenda', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-agent-agenda"
                    onclick="tryItOut('GETapi-agent-agenda');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-agent-agenda"
                    onclick="cancelTryOut('GETapi-agent-agenda');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-agent-agenda"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/agent/agenda</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-agent-agenda"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-agent-agenda"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-agent-visits">GET api/agent/visits</h2>

<p>
</p>



<span id="example-requests-GETapi-agent-visits">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/agent/visits" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/visits"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-agent-visits">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-agent-visits" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-agent-visits"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-agent-visits"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-agent-visits" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-agent-visits">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-agent-visits" data-method="GET"
      data-path="api/agent/visits"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-agent-visits', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-agent-visits"
                    onclick="tryItOut('GETapi-agent-visits');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-agent-visits"
                    onclick="cancelTryOut('GETapi-agent-visits');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-agent-visits"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/agent/visits</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-agent-visits"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-agent-visits"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-agent-visits--id--confirm">L&#039;agent confirme la visite (de son côté).</h2>

<p>
</p>

<p>Si l'utilisateur a aussi confirmé → visite "completed" → dossier débloqué.</p>

<span id="example-requests-POSTapi-agent-visits--id--confirm">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/agent/visits/architecto/confirm" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/visits/architecto/confirm"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-agent-visits--id--confirm">
</span>
<span id="execution-results-POSTapi-agent-visits--id--confirm" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-agent-visits--id--confirm"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-agent-visits--id--confirm"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-agent-visits--id--confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-agent-visits--id--confirm">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-agent-visits--id--confirm" data-method="POST"
      data-path="api/agent/visits/{id}/confirm"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-agent-visits--id--confirm', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-agent-visits--id--confirm"
                    onclick="tryItOut('POSTapi-agent-visits--id--confirm');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-agent-visits--id--confirm"
                    onclick="cancelTryOut('POSTapi-agent-visits--id--confirm');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-agent-visits--id--confirm"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/agent/visits/{id}/confirm</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-agent-visits--id--confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-agent-visits--id--confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-agent-visits--id--confirm"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the visit. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-agent-visits--id--cancel">L&#039;agent annule une visite.</h2>

<p>
</p>



<span id="example-requests-POSTapi-agent-visits--id--cancel">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/agent/visits/architecto/cancel" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/visits/architecto/cancel"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-agent-visits--id--cancel">
</span>
<span id="execution-results-POSTapi-agent-visits--id--cancel" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-agent-visits--id--cancel"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-agent-visits--id--cancel"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-agent-visits--id--cancel" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-agent-visits--id--cancel">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-agent-visits--id--cancel" data-method="POST"
      data-path="api/agent/visits/{id}/cancel"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-agent-visits--id--cancel', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-agent-visits--id--cancel"
                    onclick="tryItOut('POSTapi-agent-visits--id--cancel');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-agent-visits--id--cancel"
                    onclick="cancelTryOut('POSTapi-agent-visits--id--cancel');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-agent-visits--id--cancel"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/agent/visits/{id}/cancel</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-agent-visits--id--cancel"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-agent-visits--id--cancel"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-agent-visits--id--cancel"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the visit. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-agent-applications">GET api/agent/applications</h2>

<p>
</p>



<span id="example-requests-GETapi-agent-applications">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/agent/applications" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/applications"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-agent-applications">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-agent-applications" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-agent-applications"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-agent-applications"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-agent-applications" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-agent-applications">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-agent-applications" data-method="GET"
      data-path="api/agent/applications"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-agent-applications', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-agent-applications"
                    onclick="tryItOut('GETapi-agent-applications');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-agent-applications"
                    onclick="cancelTryOut('GETapi-agent-applications');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-agent-applications"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/agent/applications</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-agent-applications"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-agent-applications"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-agent-applications--id-">GET api/agent/applications/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-agent-applications--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/agent/applications/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/applications/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-agent-applications--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-agent-applications--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-agent-applications--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-agent-applications--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-agent-applications--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-agent-applications--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-agent-applications--id-" data-method="GET"
      data-path="api/agent/applications/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-agent-applications--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-agent-applications--id-"
                    onclick="tryItOut('GETapi-agent-applications--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-agent-applications--id-"
                    onclick="cancelTryOut('GETapi-agent-applications--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-agent-applications--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/agent/applications/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-agent-applications--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-agent-applications--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-agent-applications--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the application. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-agent-applications--id--validate">L&#039;agent valide le dossier → crée le Rental en attente de paiement.</h2>

<p>
</p>



<span id="example-requests-POSTapi-agent-applications--id--validate">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/agent/applications/architecto/validate" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"advance_months\": 4,
    \"start_date\": \"2052-04-19\",
    \"notes\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/applications/architecto/validate"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "advance_months": 4,
    "start_date": "2052-04-19",
    "notes": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-agent-applications--id--validate">
</span>
<span id="execution-results-POSTapi-agent-applications--id--validate" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-agent-applications--id--validate"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-agent-applications--id--validate"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-agent-applications--id--validate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-agent-applications--id--validate">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-agent-applications--id--validate" data-method="POST"
      data-path="api/agent/applications/{id}/validate"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-agent-applications--id--validate', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-agent-applications--id--validate"
                    onclick="tryItOut('POSTapi-agent-applications--id--validate');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-agent-applications--id--validate"
                    onclick="cancelTryOut('POSTapi-agent-applications--id--validate');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-agent-applications--id--validate"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/agent/applications/{id}/validate</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-agent-applications--id--validate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-agent-applications--id--validate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-agent-applications--id--validate"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the application. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>advance_months</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="advance_months"                data-endpoint="POSTapi-agent-applications--id--validate"
               value="4"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 12. Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="POSTapi-agent-applications--id--validate"
               value="2052-04-19"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>today</code>. Example: <code>2052-04-19</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-agent-applications--id--validate"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-agent-applications--id--reject">L&#039;agent rejette un dossier.</h2>

<p>
</p>



<span id="example-requests-POSTapi-agent-applications--id--reject">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/agent/applications/architecto/reject" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"reason\": \"b\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/applications/architecto/reject"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "reason": "b"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-agent-applications--id--reject">
</span>
<span id="execution-results-POSTapi-agent-applications--id--reject" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-agent-applications--id--reject"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-agent-applications--id--reject"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-agent-applications--id--reject" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-agent-applications--id--reject">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-agent-applications--id--reject" data-method="POST"
      data-path="api/agent/applications/{id}/reject"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-agent-applications--id--reject', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-agent-applications--id--reject"
                    onclick="tryItOut('POSTapi-agent-applications--id--reject');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-agent-applications--id--reject"
                    onclick="cancelTryOut('POSTapi-agent-applications--id--reject');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-agent-applications--id--reject"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/agent/applications/{id}/reject</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-agent-applications--id--reject"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-agent-applications--id--reject"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-agent-applications--id--reject"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the application. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>reason</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="reason"                data-endpoint="POSTapi-agent-applications--id--reject"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 500 characters. Example: <code>b</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-agent-rentals">GET api/agent/rentals</h2>

<p>
</p>



<span id="example-requests-GETapi-agent-rentals">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/agent/rentals" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/rentals"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-agent-rentals">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-agent-rentals" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-agent-rentals"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-agent-rentals"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-agent-rentals" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-agent-rentals">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-agent-rentals" data-method="GET"
      data-path="api/agent/rentals"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-agent-rentals', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-agent-rentals"
                    onclick="tryItOut('GETapi-agent-rentals');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-agent-rentals"
                    onclick="cancelTryOut('GETapi-agent-rentals');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-agent-rentals"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/agent/rentals</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-agent-rentals"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-agent-rentals"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-agent-rentals--id--confirm-payment">L&#039;agent confirme la réception du paiement initial → activation de la location.</h2>

<p>
</p>

<p>C'est ici que le rôle "locataire" est attribué.</p>

<span id="example-requests-POSTapi-agent-rentals--id--confirm-payment">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/agent/rentals/architecto/confirm-payment" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"payment_method\": \"momo\",
    \"notes\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/rentals/architecto/confirm-payment"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "payment_method": "momo",
    "notes": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-agent-rentals--id--confirm-payment">
</span>
<span id="execution-results-POSTapi-agent-rentals--id--confirm-payment" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-agent-rentals--id--confirm-payment"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-agent-rentals--id--confirm-payment"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-agent-rentals--id--confirm-payment" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-agent-rentals--id--confirm-payment">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-agent-rentals--id--confirm-payment" data-method="POST"
      data-path="api/agent/rentals/{id}/confirm-payment"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-agent-rentals--id--confirm-payment', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-agent-rentals--id--confirm-payment"
                    onclick="tryItOut('POSTapi-agent-rentals--id--confirm-payment');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-agent-rentals--id--confirm-payment"
                    onclick="cancelTryOut('POSTapi-agent-rentals--id--confirm-payment');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-agent-rentals--id--confirm-payment"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/agent/rentals/{id}/confirm-payment</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-agent-rentals--id--confirm-payment"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-agent-rentals--id--confirm-payment"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-agent-rentals--id--confirm-payment"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the rental. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payment_method</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="payment_method"                data-endpoint="POSTapi-agent-rentals--id--confirm-payment"
               value="momo"
               data-component="body">
    <br>
<p>Example: <code>momo</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>momo</code></li> <li><code>om</code></li> <li><code>card</code></li> <li><code>cash</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-agent-rentals--id--confirm-payment"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-agent-formations">GET api/agent/formations</h2>

<p>
</p>



<span id="example-requests-GETapi-agent-formations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/agent/formations" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/formations"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-agent-formations">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-agent-formations" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-agent-formations"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-agent-formations"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-agent-formations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-agent-formations">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-agent-formations" data-method="GET"
      data-path="api/agent/formations"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-agent-formations', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-agent-formations"
                    onclick="tryItOut('GETapi-agent-formations');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-agent-formations"
                    onclick="cancelTryOut('GETapi-agent-formations');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-agent-formations"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/agent/formations</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-agent-formations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-agent-formations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-agent-publication-missions">Liste des missions d&#039;audit/publication assignées à l&#039;agent</h2>

<p>
</p>



<span id="example-requests-GETapi-agent-publication-missions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/agent/publication-missions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/publication-missions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-agent-publication-missions">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-agent-publication-missions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-agent-publication-missions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-agent-publication-missions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-agent-publication-missions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-agent-publication-missions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-agent-publication-missions" data-method="GET"
      data-path="api/agent/publication-missions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-agent-publication-missions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-agent-publication-missions"
                    onclick="tryItOut('GETapi-agent-publication-missions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-agent-publication-missions"
                    onclick="cancelTryOut('GETapi-agent-publication-missions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-agent-publication-missions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/agent/publication-missions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-agent-publication-missions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-agent-publication-missions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-agent-publication-missions--id-">Détails d&#039;une mission d&#039;audit spécifique</h2>

<p>
</p>



<span id="example-requests-GETapi-agent-publication-missions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/agent/publication-missions/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/publication-missions/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-agent-publication-missions--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-agent-publication-missions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-agent-publication-missions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-agent-publication-missions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-agent-publication-missions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-agent-publication-missions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-agent-publication-missions--id-" data-method="GET"
      data-path="api/agent/publication-missions/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-agent-publication-missions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-agent-publication-missions--id-"
                    onclick="tryItOut('GETapi-agent-publication-missions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-agent-publication-missions--id-"
                    onclick="cancelTryOut('GETapi-agent-publication-missions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-agent-publication-missions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/agent/publication-missions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-agent-publication-missions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-agent-publication-missions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-agent-publication-missions--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the publication mission. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-agent-publication-missions--id--schedule">Programmer la date de visite/audit pour une mission.</h2>

<p>
</p>



<span id="example-requests-POSTapi-agent-publication-missions--id--schedule">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/agent/publication-missions/architecto/schedule" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"scheduled_at\": \"2052-04-19\",
    \"agent_notes\": \"n\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/publication-missions/architecto/schedule"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "scheduled_at": "2052-04-19",
    "agent_notes": "n"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-agent-publication-missions--id--schedule">
</span>
<span id="execution-results-POSTapi-agent-publication-missions--id--schedule" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-agent-publication-missions--id--schedule"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-agent-publication-missions--id--schedule"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-agent-publication-missions--id--schedule" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-agent-publication-missions--id--schedule">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-agent-publication-missions--id--schedule" data-method="POST"
      data-path="api/agent/publication-missions/{id}/schedule"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-agent-publication-missions--id--schedule', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-agent-publication-missions--id--schedule"
                    onclick="tryItOut('POSTapi-agent-publication-missions--id--schedule');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-agent-publication-missions--id--schedule"
                    onclick="cancelTryOut('POSTapi-agent-publication-missions--id--schedule');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-agent-publication-missions--id--schedule"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/agent/publication-missions/{id}/schedule</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-agent-publication-missions--id--schedule"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-agent-publication-missions--id--schedule"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-agent-publication-missions--id--schedule"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the publication mission. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>scheduled_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="scheduled_at"                data-endpoint="POSTapi-agent-publication-missions--id--schedule"
               value="2052-04-19"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>now</code>. Example: <code>2052-04-19</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>agent_notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="agent_notes"                data-endpoint="POSTapi-agent-publication-missions--id--schedule"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 500 characters. Example: <code>n</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-agent-publication-missions--id--complete">Finaliser la publication d&#039;un bien après audit terrain
POST /api/agent/publication-missions/{id}/complete</h2>

<p>
</p>



<span id="example-requests-POSTapi-agent-publication-missions--id--complete">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/agent/publication-missions/architecto/complete" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "title=b"\
    --form "category=architecto"\
    --form "type=rent"\
    --form "price=4326.41688"\
    --form "city=architecto"\
    --form "location=architecto"\
    --form "description=Eius et animi quos velit et."\
    --form "bedrooms=16"\
    --form "bathrooms=16"\
    --form "area=4326.41688"\
    --form "etat=architecto"\
    --form "amenities=architecto"\
    --form "images[]=@C:\Users\DELL\AppData\Local\Temp\php442E.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/agent/publication-missions/architecto/complete"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('title', 'b');
body.append('category', 'architecto');
body.append('type', 'rent');
body.append('price', '4326.41688');
body.append('city', 'architecto');
body.append('location', 'architecto');
body.append('description', 'Eius et animi quos velit et.');
body.append('bedrooms', '16');
body.append('bathrooms', '16');
body.append('area', '4326.41688');
body.append('etat', 'architecto');
body.append('amenities', 'architecto');
body.append('images[]', document.querySelector('input[name="images[]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-agent-publication-missions--id--complete">
</span>
<span id="execution-results-POSTapi-agent-publication-missions--id--complete" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-agent-publication-missions--id--complete"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-agent-publication-missions--id--complete"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-agent-publication-missions--id--complete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-agent-publication-missions--id--complete">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-agent-publication-missions--id--complete" data-method="POST"
      data-path="api/agent/publication-missions/{id}/complete"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-agent-publication-missions--id--complete', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-agent-publication-missions--id--complete"
                    onclick="tryItOut('POSTapi-agent-publication-missions--id--complete');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-agent-publication-missions--id--complete"
                    onclick="cancelTryOut('POSTapi-agent-publication-missions--id--complete');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-agent-publication-missions--id--complete"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/agent/publication-missions/{id}/complete</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-agent-publication-missions--id--complete"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-agent-publication-missions--id--complete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-agent-publication-missions--id--complete"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the publication mission. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-agent-publication-missions--id--complete"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="POSTapi-agent-publication-missions--id--complete"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-agent-publication-missions--id--complete"
               value="rent"
               data-component="body">
    <br>
<p>Example: <code>rent</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>rent</code></li> <li><code>sale</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price"                data-endpoint="POSTapi-agent-publication-missions--id--complete"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city"                data-endpoint="POSTapi-agent-publication-missions--id--complete"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="location"                data-endpoint="POSTapi-agent-publication-missions--id--complete"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-agent-publication-missions--id--complete"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bedrooms</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="bedrooms"                data-endpoint="POSTapi-agent-publication-missions--id--complete"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bathrooms</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="bathrooms"                data-endpoint="POSTapi-agent-publication-missions--id--complete"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>area</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="area"                data-endpoint="POSTapi-agent-publication-missions--id--complete"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>etat</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="etat"                data-endpoint="POSTapi-agent-publication-missions--id--complete"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>amenities</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="amenities"                data-endpoint="POSTapi-agent-publication-missions--id--complete"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>images</code></b>&nbsp;&nbsp;
<small>file[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="images[0]"                data-endpoint="POSTapi-agent-publication-missions--id--complete"
               data-component="body">
        <input type="file" style="display: none"
               name="images[1]"                data-endpoint="POSTapi-agent-publication-missions--id--complete"
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 5120 kilobytes.</p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-formations">GET api/formations</h2>

<p>
</p>



<span id="example-requests-GETapi-formations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/formations" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/formations"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-formations">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-formations" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-formations"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-formations"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-formations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-formations">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-formations" data-method="GET"
      data-path="api/formations"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-formations', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-formations"
                    onclick="tryItOut('GETapi-formations');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-formations"
                    onclick="cancelTryOut('GETapi-formations');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-formations"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/formations</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-formations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-formations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-formations--formation_id-">GET api/formations/{formation_id}</h2>

<p>
</p>



<span id="example-requests-GETapi-formations--formation_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/formations/16" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/formations/16"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-formations--formation_id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-formations--formation_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-formations--formation_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-formations--formation_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-formations--formation_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-formations--formation_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-formations--formation_id-" data-method="GET"
      data-path="api/formations/{formation_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-formations--formation_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-formations--formation_id-"
                    onclick="tryItOut('GETapi-formations--formation_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-formations--formation_id-"
                    onclick="cancelTryOut('GETapi-formations--formation_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-formations--formation_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/formations/{formation_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-formations--formation_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-formations--formation_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>formation_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="formation_id"                data-endpoint="GETapi-formations--formation_id-"
               value="16"
               data-component="url">
    <br>
<p>The ID of the formation. Example: <code>16</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-formations--formation_id--purchase">POST api/formations/{formation_id}/purchase</h2>

<p>
</p>



<span id="example-requests-POSTapi-formations--formation_id--purchase">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/formations/16/purchase" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/formations/16/purchase"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-formations--formation_id--purchase">
</span>
<span id="execution-results-POSTapi-formations--formation_id--purchase" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-formations--formation_id--purchase"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-formations--formation_id--purchase"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-formations--formation_id--purchase" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-formations--formation_id--purchase">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-formations--formation_id--purchase" data-method="POST"
      data-path="api/formations/{formation_id}/purchase"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-formations--formation_id--purchase', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-formations--formation_id--purchase"
                    onclick="tryItOut('POSTapi-formations--formation_id--purchase');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-formations--formation_id--purchase"
                    onclick="cancelTryOut('POSTapi-formations--formation_id--purchase');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-formations--formation_id--purchase"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/formations/{formation_id}/purchase</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-formations--formation_id--purchase"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-formations--formation_id--purchase"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>formation_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="formation_id"                data-endpoint="POSTapi-formations--formation_id--purchase"
               value="16"
               data-component="url">
    <br>
<p>The ID of the formation. Example: <code>16</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-prestataire-dashboard">Get dashboard data for the prestataire</h2>

<p>
</p>



<span id="example-requests-GETapi-prestataire-dashboard">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/prestataire/dashboard" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/prestataire/dashboard"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-prestataire-dashboard">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-prestataire-dashboard" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-prestataire-dashboard"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-prestataire-dashboard"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-prestataire-dashboard" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-prestataire-dashboard">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-prestataire-dashboard" data-method="GET"
      data-path="api/prestataire/dashboard"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-prestataire-dashboard', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-prestataire-dashboard"
                    onclick="tryItOut('GETapi-prestataire-dashboard');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-prestataire-dashboard"
                    onclick="cancelTryOut('GETapi-prestataire-dashboard');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-prestataire-dashboard"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/prestataire/dashboard</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-prestataire-dashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-prestataire-dashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-prestataire-services">List of services offered by the provider</h2>

<p>
</p>



<span id="example-requests-GETapi-prestataire-services">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/prestataire/services" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/prestataire/services"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-prestataire-services">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-prestataire-services" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-prestataire-services"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-prestataire-services"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-prestataire-services" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-prestataire-services">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-prestataire-services" data-method="GET"
      data-path="api/prestataire/services"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-prestataire-services', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-prestataire-services"
                    onclick="tryItOut('GETapi-prestataire-services');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-prestataire-services"
                    onclick="cancelTryOut('GETapi-prestataire-services');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-prestataire-services"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/prestataire/services</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-prestataire-services"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-prestataire-services"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-prestataire-interventions">List of interventions assigned to the provider</h2>

<p>
</p>



<span id="example-requests-GETapi-prestataire-interventions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/prestataire/interventions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/prestataire/interventions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-prestataire-interventions">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-prestataire-interventions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-prestataire-interventions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-prestataire-interventions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-prestataire-interventions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-prestataire-interventions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-prestataire-interventions" data-method="GET"
      data-path="api/prestataire/interventions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-prestataire-interventions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-prestataire-interventions"
                    onclick="tryItOut('GETapi-prestataire-interventions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-prestataire-interventions"
                    onclick="cancelTryOut('GETapi-prestataire-interventions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-prestataire-interventions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/prestataire/interventions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-prestataire-interventions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-prestataire-interventions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-prestataire-agenda">Upcoming interventions</h2>

<p>
</p>



<span id="example-requests-GETapi-prestataire-agenda">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/prestataire/agenda" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/prestataire/agenda"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-prestataire-agenda">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-prestataire-agenda" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-prestataire-agenda"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-prestataire-agenda"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-prestataire-agenda" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-prestataire-agenda">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-prestataire-agenda" data-method="GET"
      data-path="api/prestataire/agenda"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-prestataire-agenda', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-prestataire-agenda"
                    onclick="tryItOut('GETapi-prestataire-agenda');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-prestataire-agenda"
                    onclick="cancelTryOut('GETapi-prestataire-agenda');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-prestataire-agenda"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/prestataire/agenda</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-prestataire-agenda"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-prestataire-agenda"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-prestataire-finances">Earnings and transactions</h2>

<p>
</p>



<span id="example-requests-GETapi-prestataire-finances">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/prestataire/finances" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/prestataire/finances"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-prestataire-finances">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-prestataire-finances" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-prestataire-finances"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-prestataire-finances"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-prestataire-finances" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-prestataire-finances">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-prestataire-finances" data-method="GET"
      data-path="api/prestataire/finances"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-prestataire-finances', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-prestataire-finances"
                    onclick="tryItOut('GETapi-prestataire-finances');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-prestataire-finances"
                    onclick="cancelTryOut('GETapi-prestataire-finances');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-prestataire-finances"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/prestataire/finances</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-prestataire-finances"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-prestataire-finances"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-admin-dashboard">Global dashboard statistics</h2>

<p>
</p>



<span id="example-requests-GETapi-admin-dashboard">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/dashboard" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/dashboard"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-dashboard">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-dashboard" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-dashboard"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-dashboard"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-admin-dashboard" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-dashboard">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-admin-dashboard" data-method="GET"
      data-path="api/admin/dashboard"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-dashboard', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-dashboard"
                    onclick="tryItOut('GETapi-admin-dashboard');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-dashboard"
                    onclick="cancelTryOut('GETapi-admin-dashboard');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-dashboard"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/dashboard</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-admin-dashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-admin-dashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-admin-users">List all users</h2>

<p>
</p>



<span id="example-requests-GETapi-admin-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-users">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-admin-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-admin-users" data-method="GET"
      data-path="api/admin/users"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-users"
                    onclick="tryItOut('GETapi-admin-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-users"
                    onclick="cancelTryOut('GETapi-admin-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-admin-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-admin-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PUTapi-admin-users--user_id-">Update user status (active/inactive)</h2>

<p>
</p>



<span id="example-requests-PUTapi-admin-users--user_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/admin/users/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"inactive\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/users/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "inactive"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-admin-users--user_id-">
</span>
<span id="execution-results-PUTapi-admin-users--user_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-admin-users--user_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-admin-users--user_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-admin-users--user_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-admin-users--user_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-admin-users--user_id-" data-method="PUT"
      data-path="api/admin/users/{user_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-admin-users--user_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-admin-users--user_id-"
                    onclick="tryItOut('PUTapi-admin-users--user_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-admin-users--user_id-"
                    onclick="cancelTryOut('PUTapi-admin-users--user_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-admin-users--user_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/admin/users/{user_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-admin-users--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-admin-users--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="PUTapi-admin-users--user_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-admin-users--user_id-"
               value="inactive"
               data-component="body">
    <br>
<p>Example: <code>inactive</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>active</code></li> <li><code>inactive</code></li> <li><code>pending</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-admin-properties">List all properties</h2>

<p>
</p>



<span id="example-requests-GETapi-admin-properties">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/properties" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/properties"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-properties">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-properties" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-properties"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-properties"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-admin-properties" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-properties">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-admin-properties" data-method="GET"
      data-path="api/admin/properties"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-properties', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-properties"
                    onclick="tryItOut('GETapi-admin-properties');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-properties"
                    onclick="cancelTryOut('GETapi-admin-properties');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-properties"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/properties</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-admin-properties"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-admin-properties"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PUTapi-admin-properties--property_id-">Approve or reject a property</h2>

<p>
</p>



<span id="example-requests-PUTapi-admin-properties--property_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/admin/properties/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"sold\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/properties/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "sold"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-admin-properties--property_id-">
</span>
<span id="execution-results-PUTapi-admin-properties--property_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-admin-properties--property_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-admin-properties--property_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-admin-properties--property_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-admin-properties--property_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-admin-properties--property_id-" data-method="PUT"
      data-path="api/admin/properties/{property_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-admin-properties--property_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-admin-properties--property_id-"
                    onclick="tryItOut('PUTapi-admin-properties--property_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-admin-properties--property_id-"
                    onclick="cancelTryOut('PUTapi-admin-properties--property_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-admin-properties--property_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/admin/properties/{property_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-admin-properties--property_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-admin-properties--property_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>property_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="property_id"                data-endpoint="PUTapi-admin-properties--property_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the property. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-admin-properties--property_id-"
               value="sold"
               data-component="body">
    <br>
<p>Example: <code>sold</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>active</code></li> <li><code>rejected</code></li> <li><code>rented</code></li> <li><code>sold</code></li> <li><code>pending</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-admin-finances">Financial reports</h2>

<p>
</p>



<span id="example-requests-GETapi-admin-finances">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/finances" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/finances"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-finances">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-finances" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-finances"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-finances"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-admin-finances" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-finances">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-admin-finances" data-method="GET"
      data-path="api/admin/finances"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-finances', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-finances"
                    onclick="tryItOut('GETapi-admin-finances');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-finances"
                    onclick="cancelTryOut('GETapi-admin-finances');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-finances"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/finances</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-admin-finances"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-admin-finances"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-admin-services">List all services and categories</h2>

<p>
</p>



<span id="example-requests-GETapi-admin-services">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/services" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/services"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-services">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-services" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-services"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-services"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-admin-services" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-services">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-admin-services" data-method="GET"
      data-path="api/admin/services"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-services', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-services"
                    onclick="tryItOut('GETapi-admin-services');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-services"
                    onclick="cancelTryOut('GETapi-admin-services');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-services"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/services</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-admin-services"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-admin-services"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-admin-rental-stats">KPIs de supervision des locations pour l&#039;admin
GET /api/admin/rental-stats</h2>

<p>
</p>



<span id="example-requests-GETapi-admin-rental-stats">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/rental-stats" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/rental-stats"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-rental-stats">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-rental-stats" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-rental-stats"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-rental-stats"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-admin-rental-stats" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-rental-stats">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-admin-rental-stats" data-method="GET"
      data-path="api/admin/rental-stats"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-rental-stats', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-rental-stats"
                    onclick="tryItOut('GETapi-admin-rental-stats');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-rental-stats"
                    onclick="cancelTryOut('GETapi-admin-rental-stats');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-rental-stats"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/rental-stats</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-admin-rental-stats"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-admin-rental-stats"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-admin-rental-procedures">Liste paginée de toutes les demandes de location (admin view)
GET /api/admin/rental-procedures</h2>

<p>
</p>



<span id="example-requests-GETapi-admin-rental-procedures">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/rental-procedures" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/rental-procedures"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-rental-procedures">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-rental-procedures" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-rental-procedures"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-rental-procedures"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-admin-rental-procedures" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-rental-procedures">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-admin-rental-procedures" data-method="GET"
      data-path="api/admin/rental-procedures"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-rental-procedures', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-rental-procedures"
                    onclick="tryItOut('GETapi-admin-rental-procedures');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-rental-procedures"
                    onclick="cancelTryOut('GETapi-admin-rental-procedures');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-rental-procedures"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/rental-procedures</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-admin-rental-procedures"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-admin-rental-procedures"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-admin-rental-procedures--id-">Détail complet d&#039;une demande de location
GET /api/admin/rental-procedures/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-admin-rental-procedures--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/rental-procedures/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/rental-procedures/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-rental-procedures--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-rental-procedures--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-rental-procedures--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-rental-procedures--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-admin-rental-procedures--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-rental-procedures--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-admin-rental-procedures--id-" data-method="GET"
      data-path="api/admin/rental-procedures/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-rental-procedures--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-rental-procedures--id-"
                    onclick="tryItOut('GETapi-admin-rental-procedures--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-rental-procedures--id-"
                    onclick="cancelTryOut('GETapi-admin-rental-procedures--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-rental-procedures--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/rental-procedures/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-admin-rental-procedures--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-admin-rental-procedures--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-admin-rental-procedures--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the rental procedure. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-admin-rental-procedures--id--status">Mettre à jour le statut d&#039;une location (action admin)
POST /api/admin/rental-procedures/{id}/status</h2>

<p>
</p>



<span id="example-requests-POSTapi-admin-rental-procedures--id--status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/rental-procedures/architecto/status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"active\",
    \"reason\": \"b\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/rental-procedures/architecto/status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "active",
    "reason": "b"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-rental-procedures--id--status">
</span>
<span id="execution-results-POSTapi-admin-rental-procedures--id--status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-rental-procedures--id--status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-rental-procedures--id--status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-rental-procedures--id--status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-rental-procedures--id--status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-admin-rental-procedures--id--status" data-method="POST"
      data-path="api/admin/rental-procedures/{id}/status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-rental-procedures--id--status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-rental-procedures--id--status"
                    onclick="tryItOut('POSTapi-admin-rental-procedures--id--status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-rental-procedures--id--status"
                    onclick="cancelTryOut('POSTapi-admin-rental-procedures--id--status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-rental-procedures--id--status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/rental-procedures/{id}/status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-admin-rental-procedures--id--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-admin-rental-procedures--id--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-admin-rental-procedures--id--status"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the rental procedure. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-admin-rental-procedures--id--status"
               value="active"
               data-component="body">
    <br>
<p>Example: <code>active</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>pending</code></li> <li><code>active</code></li> <li><code>finished</code></li> <li><code>cancelled</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>reason</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="reason"                data-endpoint="POSTapi-admin-rental-procedures--id--status"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 500 characters. Example: <code>b</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-admin-agents">List all users with &#039;agent&#039; role</h2>

<p>
</p>



<span id="example-requests-GETapi-admin-agents">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/agents" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/agents"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-agents">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-agents" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-agents"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-agents"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-admin-agents" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-agents">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-admin-agents" data-method="GET"
      data-path="api/admin/agents"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-agents', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-agents"
                    onclick="tryItOut('GETapi-admin-agents');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-agents"
                    onclick="cancelTryOut('GETapi-admin-agents');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-agents"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/agents</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-admin-agents"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-admin-agents"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-admin-properties--property_id--assign-agent">Assign an agent to a property</h2>

<p>
</p>



<span id="example-requests-POSTapi-admin-properties--property_id--assign-agent">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/properties/1/assign-agent" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"agent_id\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/properties/1/assign-agent"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "agent_id": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-properties--property_id--assign-agent">
</span>
<span id="execution-results-POSTapi-admin-properties--property_id--assign-agent" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-properties--property_id--assign-agent"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-properties--property_id--assign-agent"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-properties--property_id--assign-agent" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-properties--property_id--assign-agent">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-admin-properties--property_id--assign-agent" data-method="POST"
      data-path="api/admin/properties/{property_id}/assign-agent"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-properties--property_id--assign-agent', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-properties--property_id--assign-agent"
                    onclick="tryItOut('POSTapi-admin-properties--property_id--assign-agent');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-properties--property_id--assign-agent"
                    onclick="cancelTryOut('POSTapi-admin-properties--property_id--assign-agent');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-properties--property_id--assign-agent"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/properties/{property_id}/assign-agent</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-admin-properties--property_id--assign-agent"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-admin-properties--property_id--assign-agent"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>property_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="property_id"                data-endpoint="POSTapi-admin-properties--property_id--assign-agent"
               value="1"
               data-component="url">
    <br>
<p>The ID of the property. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>agent_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="agent_id"                data-endpoint="POSTapi-admin-properties--property_id--assign-agent"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table. Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-admin-rental-procedures--visitId--assign-agent">Assigner un agent à une visite (gardé pour compatibilité)
POST /api/admin/rental-procedures/{visitId}/assign-agent</h2>

<p>
</p>



<span id="example-requests-POSTapi-admin-rental-procedures--visitId--assign-agent">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/rental-procedures/architecto/assign-agent" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"agent_id\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/rental-procedures/architecto/assign-agent"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "agent_id": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-rental-procedures--visitId--assign-agent">
</span>
<span id="execution-results-POSTapi-admin-rental-procedures--visitId--assign-agent" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-rental-procedures--visitId--assign-agent"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-rental-procedures--visitId--assign-agent"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-rental-procedures--visitId--assign-agent" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-rental-procedures--visitId--assign-agent">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-admin-rental-procedures--visitId--assign-agent" data-method="POST"
      data-path="api/admin/rental-procedures/{visitId}/assign-agent"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-rental-procedures--visitId--assign-agent', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-rental-procedures--visitId--assign-agent"
                    onclick="tryItOut('POSTapi-admin-rental-procedures--visitId--assign-agent');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-rental-procedures--visitId--assign-agent"
                    onclick="cancelTryOut('POSTapi-admin-rental-procedures--visitId--assign-agent');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-rental-procedures--visitId--assign-agent"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/rental-procedures/{visitId}/assign-agent</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-admin-rental-procedures--visitId--assign-agent"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-admin-rental-procedures--visitId--assign-agent"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>visitId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="visitId"                data-endpoint="POSTapi-admin-rental-procedures--visitId--assign-agent"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>agent_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="agent_id"                data-endpoint="POSTapi-admin-rental-procedures--visitId--assign-agent"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table. Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-admin-publication-requests">Liste des demandes de publication des bailleurs
GET /api/admin/publication-requests</h2>

<p>
</p>



<span id="example-requests-GETapi-admin-publication-requests">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/publication-requests" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/publication-requests"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-publication-requests">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-publication-requests" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-publication-requests"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-publication-requests"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-admin-publication-requests" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-publication-requests">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-admin-publication-requests" data-method="GET"
      data-path="api/admin/publication-requests"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-publication-requests', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-publication-requests"
                    onclick="tryItOut('GETapi-admin-publication-requests');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-publication-requests"
                    onclick="cancelTryOut('GETapi-admin-publication-requests');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-publication-requests"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/publication-requests</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-admin-publication-requests"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-admin-publication-requests"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-admin-publication-requests--id--assign">Assigner un agent à une demande de publication
POST /api/admin/publication-requests/{id}/assign</h2>

<p>
</p>



<span id="example-requests-POSTapi-admin-publication-requests--id--assign">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/publication-requests/architecto/assign" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"agent_id\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/publication-requests/architecto/assign"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "agent_id": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-publication-requests--id--assign">
</span>
<span id="execution-results-POSTapi-admin-publication-requests--id--assign" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-publication-requests--id--assign"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-publication-requests--id--assign"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-publication-requests--id--assign" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-publication-requests--id--assign">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-admin-publication-requests--id--assign" data-method="POST"
      data-path="api/admin/publication-requests/{id}/assign"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-publication-requests--id--assign', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-publication-requests--id--assign"
                    onclick="tryItOut('POSTapi-admin-publication-requests--id--assign');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-publication-requests--id--assign"
                    onclick="cancelTryOut('POSTapi-admin-publication-requests--id--assign');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-publication-requests--id--assign"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/publication-requests/{id}/assign</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-admin-publication-requests--id--assign"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-admin-publication-requests--id--assign"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-admin-publication-requests--id--assign"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the publication request. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>agent_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="agent_id"                data-endpoint="POSTapi-admin-publication-requests--id--assign"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table. Example: <code>architecto</code></p>
        </div>
        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
