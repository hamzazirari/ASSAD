<?php
require '../db.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zoo Virtuel ASSAD - Tableau de bord Guide">
    <title>Dashboard Guide - Zoo Virtuel ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-amber-50 via-green-50 to-yellow-50 min-h-screen">
    
    <!-- Header / Navigation -->
    <header class="bg-white shadow-md border-b border-amber-100">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between flex-wrap gap-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="bg-gradient-to-r from-amber-600 to-green-700 text-white px-4 py-2 rounded-lg shadow-md">
                        <h1 class="text-xl font-bold">🦁 Zoo ASSAD</h1>
                    </div>
                </div>
                
                <!-- Menu de navigation -->
                <ul class="flex items-center space-x-6">
                    <li>
                        <a href="dashboard.php" class="text-green-700 font-semibold hover:text-green-800 transition duration-200 border-b-2 border-green-700">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="../logout.php" class="text-red-600 hover:text-red-700 font-medium transition duration-200">
                            Déconnexion
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Contenu principal -->
    <main class="container mx-auto px-4 py-8">
        
        <!-- Titre et message de bienvenue -->
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Tableau de bord Guide</h2>
            <p class="text-gray-600">Bienvenue sur votre espace de gestion des visites guidées</p>
        </div>

        <!-- Statistiques rapides -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            
            <!-- Stat 1 - Visites créées -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-amber-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Visites créées</p>
                        <p class="text-3xl font-bold text-gray-800">12</p>
                    </div>
                    <div class="bg-amber-100 p-4 rounded-full">
                        <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Stat 2 - Réservations -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-amber-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Réservations</p>
                        <p class="text-3xl font-bold text-gray-800">47</p>
                    </div>
                    <div class="bg-green-100 p-4 rounded-full">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Stat 3 - Visiteurs -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-amber-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Visiteurs accueillis</p>
                        <p class="text-3xl font-bold text-gray-800">156</p>
                    </div>
                    <div class="bg-blue-100 p-4 rounded-full">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                </div>
            </div>

        </div>

        <!-- Actions principales -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Actions rapides</h3>
        </div>

        <!-- Cards d'actions -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Card 1 - Créer une visite -->
            <a href="visite-form.php" class="group">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-amber-100 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                    <div class="h-40 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-green-700 transition duration-200">
                            Créer une visite guidée
                        </h3>
                        <p class="text-gray-600 text-sm">
                            Proposez une nouvelle visite guidée aux visiteurs du zoo
                        </p>
                    </div>
                </div>
            </a>

            <!-- Card 2 - Mes visites -->
            <a href="mes-visites.php" class="group">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-amber-100 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                    <div class="h-40 bg-gradient-to-br from-amber-400 to-orange-600 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-amber-700 transition duration-200">
                            Mes visites
                        </h3>
                        <p class="text-gray-600 text-sm">
                            Consultez et gérez toutes vos visites guidées
                        </p>
                    </div>
                </div>
            </a>

            <!-- Card 3 - Voir réservations -->
            <a href="reservations.php" class="group">
                <div class="mb-10 bg-white rounded-xl shadow-lg overflow-hidden border border-amber-100 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                    <div class="h-40 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-blue-700 transition duration-200">
                            Voir réservations
                        </h3>
                        <p class="text-gray-600 text-sm">
                            Consultez les réservations pour vos visites
                        </p>
                    </div>
                </div>
            </a>

        </div>

        <!-- Card 4 - Gérer les étapes -->
<a href="etapes.php" class="group">
    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-amber-100 hover:shadow-2xl transition duration-300 transform hover:scale-105">
        <div class="h-40 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
            <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 17v-2h6v2m-6-6h6m-7 10h8a2 2 0 002-2V7a2 2 0 00-2-2H8a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-purple-700 transition duration-200">
                Étapes des visites
            </h3>
            <p class="text-gray-600 text-sm">
                Ajouter et organiser le parcours des visites guidées
            </p>
        </div>
    </div>
</a>


        <!-- Section prochaines visites -->
        <div class="mt-12">
            <div class="bg-white rounded-xl shadow-lg p-8 border border-amber-100">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Prochaines visites planifiées</h3>
                
                <div class="space-y-4">
                    <!-- Visite 1 -->
                    <div class="flex items-center justify-between p-4 bg-gradient-to-r from-green-50 to-green-100 rounded-lg border border-green-200">
                        <div class="flex items-center space-x-4">
                            <div class="bg-green-600 text-white rounded-lg p-3">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-800">Safari dans la Savane</p>
                                <p class="text-sm text-gray-600">20 Janvier 2025 à 10:00</p>
                            </div>
                        </div>
                        <span class="bg-green-600 text-white px-4 py-2 rounded-full text-sm font-semibold">
                            8 inscrits
                        </span>
                    </div>

                    <!-- Visite 2 -->
                    <div class="flex items-center justify-between p-4 bg-gradient-to-r from-amber-50 to-amber-100 rounded-lg border border-amber-200">
                        <div class="flex items-center space-x-4">
                            <div class="bg-amber-600 text-white rounded-lg p-3">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-800">Découverte des Félins</p>
                                <p class="text-sm text-gray-600">22 Janvier 2025 à 14:00</p>
                            </div>
                        </div>
                        <span class="bg-amber-600 text-white px-4 py-2 rounded-full text-sm font-semibold">
                            5 inscrits
                        </span>
                    </div>

                    <!-- Visite 3 -->
                    <div class="flex items-center justify-between p-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg border border-blue-200">
                        <div class="flex items-center space-x-4">
                            <div class="bg-blue-600 text-white rounded-lg p-3">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-800">Les Géants d'Afrique</p>
                                <p class="text-sm text-gray-600">25 Janvier 2025 à 09:30</p>
                            </div>
                        </div>
                        <span class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold">
                            12 inscrits
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-amber-100 mt-12">
        <div class="container mx-auto px-4 py-6 text-center text-gray-500 text-sm">
            <p>&copy; 2025 Zoo Virtuel ASSAD - CAN 2025 - Tous droits réservés</p>
        </div>
    </footer>

</body>
</html>