<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zoo Virtuel ASSAD - Liste des animaux africains">
    <title>Nos Animaux - Zoo Virtuel ASSAD</title>
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
                        <a href="animaux.php" class="text-green-700 font-semibold hover:text-green-800 transition duration-200 border-b-2 border-green-700">
                            Animaux
                        </a>
                    </li>
                    <li>
                        <a href="visites.php" class="text-gray-600 hover:text-green-700 font-medium transition duration-200">
                            Visites guidées
                        </a>
                    </li>
                    <li>
                        <a href="../index.php" class="text-red-600 hover:text-red-700 font-medium transition duration-200">
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
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Nos Animaux</h2>
            <p class="text-gray-600">Découvrez la faune africaine de notre zoo virtuel</p>
        </div>

        <!-- Section filtres -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8 border border-amber-100">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Filtrer les animaux</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                
                <!-- Filtre Habitat -->
                <div>
                    <label for="habitat" class="block text-sm font-medium text-gray-700 mb-2">
                        Habitat
                    </label>
                    <select 
                        id="habitat" 
                        name="habitat"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent outline-none transition duration-200"
                    >
                        <option value="">Tous les habitats</option>
                        <option value="savane">Savane</option>
                        <option value="jungle">Jungle</option>
                        <option value="desert">Désert</option>
                        <option value="montagne">Montagne</option>
                        <option value="zone_humide">Zone humide</option>
                    </select>
                </div>

                <!-- Filtre Pays -->
                <div>
                    <label for="pays" class="block text-sm font-medium text-gray-700 mb-2">
                        Pays d'origine
                    </label>
                    <select 
                        id="pays" 
                        name="pays"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent outline-none transition duration-200"
                    >
                        <option value="">Tous les pays</option>
                        <option value="kenya">Kenya</option>
                        <option value="tanzanie">Tanzanie</option>
                        <option value="afrique_sud">Afrique du Sud</option>
                        <option value="cameroun">Cameroun</option>
                        <option value="senegal">Sénégal</option>
                        <option value="madagascar">Madagascar</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Liste des animaux (Cards) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Card Animal 1 - Lion -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-amber-100 hover:shadow-xl transition duration-300">
                <div class="h-48 bg-gradient-to-br from-amber-200 to-yellow-300 flex items-center justify-center">
                    <span class="text-7xl">🦁</span>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Simba</h3>
                    <p class="text-sm text-gray-600 mb-1"><span class="font-semibold">Espèce :</span> Lion d'Afrique</p>
                    <p class="text-sm text-gray-600 mb-4"><span class="font-semibold">Pays :</span> Kenya</p>
                    <a 
                        href="animal-detail.php?id=1" 
                        class="block w-full text-center bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded-lg transition duration-200"
                    >
                        Voir détails
                    </a>
                </div>
            </div>

            <!-- Card Animal 2 - Éléphant -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-amber-100 hover:shadow-xl transition duration-300">
                <div class="h-48 bg-gradient-to-br from-gray-300 to-gray-400 flex items-center justify-center">
                    <span class="text-7xl">🐘</span>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Dumbo</h3>
                    <p class="text-sm text-gray-600 mb-1"><span class="font-semibold">Espèce :</span> Éléphant d'Afrique</p>
                    <p class="text-sm text-gray-600 mb-4"><span class="font-semibold">Pays :</span> Tanzanie</p>
                    <a 
                        href="animal-detail.php?id=2" 
                        class="block w-full text-center bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded-lg transition duration-200"
                    >
                        Voir détails
                    </a>
                </div>
            </div>

            <!-- Card Animal 3 - Zèbre -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-amber-100 hover:shadow-xl transition duration-300">
                <div class="h-48 bg-gradient-to-br from-slate-200 to-slate-300 flex items-center justify-center">
                    <span class="text-7xl">🦓</span>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Marty</h3>
                    <p class="text-sm text-gray-600 mb-1"><span class="font-semibold">Espèce :</span> Zèbre des plaines</p>
                    <p class="text-sm text-gray-600 mb-4"><span class="font-semibold">Pays :</span> Kenya</p>
                    <a 
                        href="animal-detail.php?id=3" 
                        class="block w-full text-center bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded-lg transition duration-200"
                    >
                        Voir détails
                    </a>
                </div>
            </div>

            <!-- Card Animal 4 - Girafe -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-amber-100 hover:shadow-xl transition duration-300">
                <div class="h-48 bg-gradient-to-br from-yellow-200 to-orange-300 flex items-center justify-center">
                    <span class="text-7xl">🦒</span>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Melman</h3>
                    <p class="text-sm text-gray-600 mb-1"><span class="font-semibold">Espèce :</span> Girafe réticulée</p>
                    <p class="text-sm text-gray-600 mb-4"><span class="font-semibold">Pays :</span> Afrique du Sud</p>
                    <a 
                        href="animal-detail.php?id=4" 
                        class="block w-full text-center bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded-lg transition duration-200"
                    >
                        Voir détails
                    </a>
                </div>
            </div>

            <!-- Card Animal 5 - Rhinocéros -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-amber-100 hover:shadow-xl transition duration-300">
                <div class="h-48 bg-gradient-to-br from-stone-300 to-stone-400 flex items-center justify-center">
                    <span class="text-7xl">🦏</span>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Kibo</h3>
                    <p class="text-sm text-gray-600 mb-1"><span class="font-semibold">Espèce :</span> Rhinocéros blanc</p>
                    <p class="text-sm text-gray-600 mb-4"><span class="font-semibold">Pays :</span> Afrique du Sud</p>
                    <a 
                        href="animal-detail.php?id=5" 
                        class="block w-full text-center bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded-lg transition duration-200"
                    >
                        Voir détails
                    </a>
                </div>
            </div>

            <!-- Card Animal 6 - Hippopotame -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-amber-100 hover:shadow-xl transition duration-300">
                <div class="h-48 bg-gradient-to-br from-purple-200 to-purple-300 flex items-center justify-center">
                    <span class="text-7xl">🦛</span>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Gloria</h3>
                    <p class="text-sm text-gray-600 mb-1"><span class="font-semibold">Espèce :</span> Hippopotame commun</p>
                    <p class="text-sm text-gray-600 mb-4"><span class="font-semibold">Pays :</span> Cameroun</p>
                    <a 
                        href="animal-detail.php?id=6" 
                        class="block w-full text-center bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded-lg transition duration-200"
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