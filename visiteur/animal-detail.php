<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zoo Virtuel ASSAD - Détail de l'animal">
    <title>Asaad - Lion de l'Atlas - Zoo Virtuel ASSAD</title>
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
                        <a href="animaux.php" class="text-green-700 font-semibold hover:text-green-800 transition duration-200">
                            Animaux
                        </a>
                    </li>
                    <li>
                        <a href="visites.php" class="text-gray-600 hover:text-green-700 font-medium transition duration-200">
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
        
        <!-- Bouton retour -->
        <div class="mb-6">
            <a 
                href="animaux.php" 
                class="inline-flex items-center text-green-700 hover:text-green-800 font-semibold transition duration-200"
            >
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Retour à la liste des animaux
            </a>
        </div>

        <!-- Card détail animal -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-amber-100">
            
            <!-- Image large de l'animal -->
            <div class="h-96 bg-gradient-to-br from-amber-300 via-orange-300 to-yellow-400 flex items-center justify-center relative overflow-hidden">
                <span class="text-9xl">🦁</span>
                <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg">
                    <span class="text-sm font-semibold text-amber-700">Animal vedette</span>
                </div>
            </div>

            <!-- Contenu -->
            <div class="p-8 md:p-12">
                
                <!-- Titre -->
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Asaad – Lion de l'Atlas</h2>
                
                <!-- Description -->
                <div class="mb-8">
                    <p class="text-gray-700 leading-relaxed text-lg mb-4">
                        Asaad est un magnifique lion de l'Atlas, une sous-espèce emblématique qui peuplait autrefois les montagnes de l'Atlas en Afrique du Nord. 
                        Connu pour sa crinière majestueuse et sa stature imposante, Asaad incarne la force et la noblesse de cette espèce légendaire.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        Le lion de l'Atlas était historiquement plus grand que ses cousins des savanes africaines, avec une crinière plus épaisse et plus sombre. 
                        Malheureusement, cette sous-espèce est considérée comme éteinte à l'état sauvage depuis le milieu du XXe siècle, mais quelques spécimens 
                        survivent dans des parcs zoologiques à travers le monde, contribuant aux programmes de conservation.
                    </p>
                </div>

                <!-- Informations détaillées -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    
                    <!-- Info 1 - Espèce -->
                    <div class="bg-gradient-to-br from-amber-50 to-yellow-50 p-6 rounded-xl border border-amber-200">
                        <div class="flex items-start">
                            <div class="bg-amber-600 text-white p-3 rounded-lg mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-600 mb-1">Espèce</h3>
                                <p class="text-lg font-bold text-gray-800">Lion de l'Atlas</p>
                                <p class="text-sm text-gray-600 italic">(Panthera leo leo)</p>
                            </div>
                        </div>
                    </div>

                    <!-- Info 2 - Habitat -->
                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-xl border border-green-200">
                        <div class="flex items-start">
                            <div class="bg-green-600 text-white p-3 rounded-lg mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-600 mb-1">Habitat</h3>
                                <p class="text-lg font-bold text-gray-800">Montagnes de l'Atlas</p>
                                <p class="text-sm text-gray-600">Zones montagneuses et semi-arides</p>
                            </div>
                        </div>
                    </div>

                    <!-- Info 3 - Pays d'origine -->
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 p-6 rounded-xl border border-blue-200">
                        <div class="flex items-start">
                            <div class="bg-blue-600 text-white p-3 rounded-lg mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-600 mb-1">Pays d'origine</h3>
                                <p class="text-lg font-bold text-gray-800">Maroc, Algérie, Tunisie</p>
                                <p class="text-sm text-gray-600">Afrique du Nord</p>
                            </div>
                        </div>
                    </div>

                    <!-- Info 4 - Statut de conservation -->
                    <div class="bg-gradient-to-br from-red-50 to-orange-50 p-6 rounded-xl border border-red-200">
                        <div class="flex items-start">
                            <div class="bg-red-600 text-white p-3 rounded-lg mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-600 mb-1">Statut de conservation</h3>
                                <p class="text-lg font-bold text-red-700">Éteint à l'état sauvage</p>
                                <p class="text-sm text-gray-600">Survit uniquement en captivité</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Bouton retour (bas de page) -->
                <div class="pt-6 border-t border-gray-200">
                    <a 
                        href="animaux.php" 
                        class="inline-flex items-center justify-center w-full md:w-auto bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105"
                    >
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Retour à la liste des animaux
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