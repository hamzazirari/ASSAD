<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Habitats - Zoo Virtuel ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    
    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center">
                        <span class="text-white font-bold">Z</span>
                    </div>
                    <div>
                        <h1 class="text-lg font-bold text-green-800">Zoo Virtuel ASSAD</h1>
                        <p class="text-xs text-gray-600">CAN 2025 - Administration</p>
                    </div>
                </div>
                <nav class="flex items-center space-x-4">
                    <a href="admin-dashboard.php" class="text-gray-700 hover:text-green-700 font-medium">Dashboard</a>
                    <a href="utilisateurs.php" class="text-gray-700 hover:text-green-700 font-medium">Utilisateurs</a>
                    <a href="animaux.php" class="text-gray-700 hover:text-green-700 font-medium">Animaux</a>
                    <a href="habitats.php" class="text-green-700 font-medium border-b-2 border-green-600">Habitats</a>
                    <a href="../logout.php" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">Déconnexion</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-6">
        
        <!-- Page Title -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-green-800 mb-2">Gestion des habitats</h2>
            <p class="text-gray-600">Administrez les habitats du zoo virtuel</p>
        </div>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
            <div class="bg-white rounded-lg shadow p-4 border-l-4 border-green-500">
                <p class="text-sm text-gray-600">Total habitats</p>
                <p class="text-xl font-bold text-green-600">12</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4 border-l-4 border-blue-500">
                <p class="text-sm text-gray-600">Animaux logés</p>
                <p class="text-xl font-bold text-blue-600">245</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4 border-l-4 border-amber-500">
                <p class="text-sm text-gray-600">Zones actives</p>
                <p class="text-xl font-bold text-amber-600">6</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4 border-l-4 border-purple-500">
                <p class="text-sm text-gray-600">Maintenance</p>
                <p class="text-xl font-bold text-purple-600">2</p>
            </div>
        </div>

        <!-- Add Habitat Form -->
        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <h3 class="text-lg font-bold text-green-800 mb-4">Ajouter un nouvel habitat</h3>
            
            <form id="addHabitatForm" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Nom -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nom de l'habitat *</label>
                        <input type="text" 
                               name="nom"
                               class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-1 focus:ring-green-500"
                               placeholder="Ex: Savane Africaine"
                               required>
                    </div>
                    
                    <!-- Type de climat -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Type de climat *</label>
                        <select name="climat" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-1 focus:ring-green-500" required>
                            <option value="">Sélectionner un climat</option>
                            <option value="tropical">Tropical</option>
                            <option value="aride">Aride</option>
                            <option value="tempéré">Tempéré</option>
                            <option value="froid">Froid</option>
                            <option value="humide">Humide</option>
                            <option value="désertique">Désertique</option>
                        </select>
                    </div>
                    
                    <!-- Zone du zoo -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Zone du zoo *</label>
                        <select name="zone" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-1 focus:ring-green-500" required>
                            <option value="">Sélectionner une zone</option>
                            <option value="A">Zone A - Entrée</option>
                            <option value="B">Zone B - Centre</option>
                            <option value="C">Zone C - Est</option>
                            <option value="D">Zone D - Ouest</option>
                            <option value="E">Zone E - Nord</option>
                            <option value="F">Zone F - Sud</option>
                        </select>
                    </div>
                    
                    <!-- Capacité -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Capacité maximale</label>
                        <input type="number" 
                               name="capacite"
                               class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-1 focus:ring-green-500"
                               placeholder="Ex: 25"
                               min="1"
                               max="100">
                    </div>
                </div>
                
                <!-- Description -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description *</label>
                    <textarea name="description" 
                              class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-1 focus:ring-green-500" 
                              rows="3" 
                              placeholder="Description de l'habitat, végétation, particularités..."
                              required></textarea>
                </div>
                
                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit" 
                            class="px-6 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">
                        Enregistrer l'habitat
                    </button>
                    <button type="reset" 
                            class="px-6 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 transition ml-3">
                        Effacer
                    </button>
                </div>
            </form>
        </div>

        <!-- Habitats Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <!-- Table Header -->
            <div class="px-6 py-4 border-b">
                <h3 class="text-lg font-bold text-gray-800">Liste des habitats</h3>
                <p class="text-sm text-gray-600 mt-1">12 habitats enregistrés</p>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Nom</th>
                            <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Type de climat</th>
                            <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Description</th>
                            <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Zone du zoo</th>
                            <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        
                        <!-- Habitat 1 -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">
                                <div class="font-medium text-gray-900">Savane Africaine</div>
                                <div class="text-xs text-gray-500">Capacité: 25 animaux</div>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-yellow-100 text-yellow-800">
                                    Aride
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <p class="text-sm text-gray-700 line-clamp-2">
                                    Grande prairie avec acacias, point d'eau artificiel, terrain sablonneux.
                                </p>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-blue-100 text-blue-800">
                                    Zone A
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <div class="flex space-x-2">
                                    <a href="habitat-form.php?id=1" 
                                       class="px-3 py-1 text-xs bg-blue-100 text-blue-700 rounded hover:bg-blue-200">
                                        Modifier
                                    </a>
                                    <button class="px-3 py-1 text-xs bg-red-100 text-red-700 rounded hover:bg-red-200">
                                        Supprimer
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Habitat 2 -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">
                                <div class="font-medium text-gray-900">Forêt Tropicale</div>
                                <div class="text-xs text-gray-500">Capacité: 30 animaux</div>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-green-100 text-green-800">
                                    Tropical
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <p class="text-sm text-gray-700 line-clamp-2">
                                    Forêt dense avec cascade, végétation luxuriante, température contrôlée.
                                </p>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-blue-100 text-blue-800">
                                    Zone B
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <div class="flex space-x-2">
                                    <a href="habitat-form.php?id=2" 
                                       class="px-3 py-1 text-xs bg-blue-100 text-blue-700 rounded hover:bg-blue-200">
                                        Modifier
                                    </a>
                                    <button class="px-3 py-1 text-xs bg-red-100 text-red-700 rounded hover:bg-red-200">
                                        Supprimer
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Habitat 3 -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">
                                <div class="font-medium text-gray-900">Désert des Reptiles</div>
                                <div class="text-xs text-gray-500">Capacité: 15 animaux</div>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-orange-100 text-orange-800">
                                    Désertique
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <p class="text-sm text-gray-700 line-clamp-2">
                                    Environnement sablonneux avec rochers, cactus, température élevée contrôlée.
                                </p>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-blue-100 text-blue-800">
                                    Zone C
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <div class="flex space-x-2">
                                    <a href="habitat-form.php?id=3" 
                                       class="px-3 py-1 text-xs bg-blue-100 text-blue-700 rounded hover:bg-blue-200">
                                        Modifier
                                    </a>
                                    <button class="px-3 py-1 text-xs bg-red-100 text-red-700 rounded hover:bg-red-200">
                                        Supprimer
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Habitat 4 -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">
                                <div class="font-medium text-gray-900">Jungle Asiatique</div>
                                <div class="text-xs text-gray-500">Capacité: 20 animaux</div>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-green-100 text-green-800">
                                    Humide
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <p class="text-sm text-gray-700 line-clamp-2">
                                    Jungle dense avec bambous, rivière artificielle, humidité contrôlée.
                                </p>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-blue-100 text-blue-800">
                                    Zone D
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <div class="flex space-x-2">
                                    <a href="habitat-form.php?id=4" 
                                       class="px-3 py-1 text-xs bg-blue-100 text-blue-700 rounded hover:bg-blue-200">
                                        Modifier
                                    </a>
                                    <button class="px-3 py-1 text-xs bg-red-100 text-red-700 rounded hover:bg-red-200">
                                        Supprimer
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Habitat 5 -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">
                                <div class="font-medium text-gray-900">Montagne Rocheuse</div>
                                <div class="text-xs text-gray-500">Capacité: 10 animaux</div>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-gray-100 text-gray-800">
                                    Froid
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <p class="text-sm text-gray-700 line-clamp-2">
                                    Rochers, grottes artificielles, température fraîche, végétation alpine.
                                </p>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-blue-100 text-blue-800">
                                    Zone E
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <div class="flex space-x-2">
                                    <a href="habitat-form.php?id=5" 
                                       class="px-3 py-1 text-xs bg-blue-100 text-blue-700 rounded hover:bg-blue-200">
                                        Modifier
                                    </a>
                                    <button class="px-3 py-1 text-xs bg-red-100 text-red-700 rounded hover:bg-red-200">
                                        Supprimer
                                    </button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="px-6 py-4 border-t">
                <div class="flex items-center justify-between">
                    <div class="text-sm text-gray-600">
                        Affichage de 5 habitats sur 12
                    </div>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 text-sm bg-gray-100 rounded hover:bg-gray-200">
                            Précédent
                        </button>
                        <button class="px-3 py-1 text-sm bg-green-600 text-white rounded">
                            1
                        </button>
                        <button class="px-3 py-1 text-sm bg-gray-100 rounded hover:bg-gray-200">
                            2
                        </button>
                        <button class="px-3 py-1 text-sm bg-gray-100 rounded hover:bg-gray-200">
                            3
                        </button>
                        <button class="px-3 py-1 text-sm bg-gray-100 rounded hover:bg-gray-200">
                            Suivant
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="mt-6 p-4 bg-green-50 rounded-lg">
            <h3 class="text-lg font-medium text-green-800 mb-3">Actions rapides</h3>
            <div class="flex flex-wrap gap-3">
                <button class="px-4 py-2 bg-white text-green-700 rounded text-sm hover:bg-green-100 border border-green-200">
                    🌿 Gérer la végétation
                </button>
                <button class="px-4 py-2 bg-white text-blue-700 rounded text-sm hover:bg-blue-100 border border-blue-200">
                    🗺️ Voir la carte du zoo
                </button>
                <button class="px-4 py-2 bg-white text-amber-700 rounded text-sm hover:bg-amber-100 border border-amber-200">
                    📋 Exporter la liste
                </button>
                <button class="px-4 py-2 bg-white text-purple-700 rounded text-sm hover:bg-purple-100 border border-purple-200">
                    🔧 Maintenance
                </button>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="mt-8 bg-white shadow border-t">
        <div class="container mx-auto px-4 py-4">
            <div class="text-center text-gray-600 text-sm">
                <p>&copy; 2025 Zoo Virtuel ASSAD - CAN 2025</p>
                <p class="mt-1 text-xs">Page de gestion des habitats</p>
            </div>
        </div>
    </footer>

    <!-- Simple JavaScript for form validation -->
    <script>
        document.getElementById('addHabitatForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simple validation
            const inputs = this.querySelectorAll('input[required], select[required], textarea[required]');
            let isValid = true;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('border-red-500');
                } else {
                    input.classList.remove('border-red-500');
                }
            });
            
            if (isValid) {
                alert('Habitat ajouté avec succès! (Dans une version PHP, les données seraient envoyées au serveur)');
                this.reset();
            } else {
                alert('Veuillez remplir tous les champs obligatoires');
            }
        });
    </script>

</body>
</html>