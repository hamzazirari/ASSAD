<?php
require '../db.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zoo Virtuel ASSAD - Visites guidées disponibles">
    <title>Visites Guidées - Zoo Virtuel ASSAD</title>
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
                        <a href="animaux.php" class="text-gray-600 hover:text-green-700 font-medium transition duration-200">
                            Animaux
                        </a>
                    </li>
                    <li>
                        <a href="visites.php" class="text-green-700 font-semibold hover:text-green-800 transition duration-200 border-b-2 border-green-700">
                            Visites guidées
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
        
        <!-- Titre de la page -->
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Visites Guidées</h2>
            <p class="text-gray-600">Découvrez nos visites guidées avec des experts passionnés</p>
        </div>

        <!-- Barre de recherche -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8 border border-amber-100">
            <div class="flex items-center">
                <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <input 
                    type="text" 
                    placeholder="Rechercher une visite par titre, date ou langue..."
                    class="w-full px-4 py-2 border-none focus:outline-none focus:ring-0 text-gray-700"
                >
            </div>
        </div>

        <!-- Liste des visites (Cards) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            
            <!-- Card Visite 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-amber-100 hover:shadow-xl transition duration-300">
                <div class="p-6">
                    <div class="flex items-start justify-between mb-4">
                        <h3 class="text-xl font-bold text-gray-800 flex-1">Safari dans la Savane</h3>
                        <span class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">Disponible</span>
                    </div>
                    
                    <div class="space-y-3 mb-5">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="font-medium">Date :</span>
                            <span class="ml-2">20 Janvier 2025</span>
                        </div>
                        
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="font-medium">Heure :</span>
                            <span class="ml-2">10:00</span>
                        </div>
                        
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                            </svg>
                            <span class="font-medium">Langue :</span>
                            <span class="ml-2">Français</span>
                        </div>
                        
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="font-medium">Prix :</span>
                            <span class="ml-2 text-green-700 font-bold">150 MAD</span>
                        </div>
                    </div>
                    
                    <a 
                        href="visite-detail.php?id=1" 
                        class="block w-full text-center bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-lg transition duration-200"
                    >
                        Voir détails
                    </a>
                </div>
            </div>

            <!-- Card Visite 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-amber-100 hover:shadow-xl transition duration-300">
                <div class="p-6">
                    <div class="flex items-start justify-between mb-4">
                        <h3 class="text-xl font-bold text-gray-800 flex-1">Découverte des Félins</h3>
                        <span class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">Disponible</span>
                    </div>
                    
                    <div class="space-y-3 mb-5">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="font-medium">Date :</span>
                            <span class="ml-2">22 Janvier 2025</span>
                        </div>
                        
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="font-medium">Heure :</span>
                            <span class="ml-2">14:00</span>
                        </div>
                        
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                            </svg>
                            <span class="font-medium">Langue :</span>
                            <span class="ml-2">Anglais</span>
                        </div>
                        
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="font-medium">Prix :</span>
                            <span class="ml-2 text-green-700 font-bold">200 MAD</span>
                        </div>
                    </div>
                    
                    <a 
                        href="visite-detail.php?id=2" 
                        class="block w-full text-center bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-lg transition duration-200"
                    >
                        Voir détails
                    </a>
                </div>
            </div>

            <!-- Card Visite 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-amber-100 hover:shadow-xl transition duration-300">
                <div class="p-6">
                    <div class="flex items-start justify-between mb-4">
                        <h3 class="text-xl font-bold text-gray-800 flex-1">Les Géants d'Afrique</h3>
                        <span class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">Disponible</span>
                    </div>
                    
                    <div class="space-y-3 mb-5">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="font-medium">Date :</span>
                            <span class="ml-2">25 Janvier 2025</span>
                        </div>
                        
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="font-medium">Heure :</span>
                            <span class="ml-2">09:30</span>
                        </div>
                        
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                            </svg>
                            <span class="font-medium">Langue :</span>
                            <span class="ml-2">Français</span>
                        </div>
                        
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="font-medium">Prix :</span>
                            <span class="ml-2 text-green-700 font-bold">180 MAD</span>
                        </div>
                    </div>
                    
                    <a 
                        href="visite-detail.php?id=3" 
                        class="block w-full text-center bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-lg transition duration-200"
                    >
                        Voir détails
                    </a>
                </div>
            </div>

            <!-- Card Visite 4 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-amber-100 hover:shadow-xl transition duration-300">
                <div class="p-6">
                    <div class="flex items-start justify-between mb-4">
                        <h3 class="text-xl font-bold text-gray-800 flex-1">Oiseaux Exotiques d'Afrique</h3>
                        <span class="bg-yellow-100 text-yellow-700 text-xs font-semibold px-3 py-1 rounded-full">Places limitées</span>
                    </div>
                    
                    <div class="space-y-3 mb-5">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="font-medium">Date :</span>
                            <span class="ml-2">27 Janvier 2025</span>
                        </div>
                        
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="font-medium">Heure :</span>
                            <span class="ml-2">11:00</span>
                        </div>
                        
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                            </svg>
                            <span class="font-medium">Langue :</span>
                            <span class="ml-2">Arabe</span>
                        </div>
                        
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="font-medium">Prix :</span>
                            <span class="ml-2 text-green-700 font-bold">120 MAD</span>
                        </div>
                    </div>
                    
                    <a 
                        href="visite-detail.php?id=4" 
                        class="block w-full text-center bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-lg transition duration-200"
                    >
                        Voir détails
                    </a>
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