<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Animaux - Zoo Virtuel ASSAD</title>
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
                    <a href="animaux.php" class="text-green-700 font-medium border-b-2 border-green-600">Animaux</a>
                    <a href="../index.php" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">Déconnexion</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-6">
        
        <!-- Page Title -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-green-800 mb-2">Gestion des animaux</h2>
            <p class="text-gray-600">Administrez les animaux du zoo virtuel</p>
        </div>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
            <div class="bg-white rounded-lg shadow p-4 border-l-4 border-blue-500">
                <p class="text-sm text-gray-600">Total animaux</p>
                <p class="text-xl font-bold text-blue-600">245</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4 border-l-4 border-green-500">
                <p class="text-sm text-gray-600">Mammifères</p>
                <p class="text-xl font-bold text-green-600">120</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4 border-l-4 border-amber-500">
                <p class="text-sm text-gray-600">Oiseaux</p>
                <p class="text-xl font-bold text-amber-600">75</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4 border-l-4 border-purple-500">
                <p class="text-sm text-gray-600">Reptiles</p>
                <p class="text-xl font-bold text-purple-600">50</p>
            </div>
        </div>

        <!-- Add Animal Form -->
        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <h3 class="text-lg font-bold text-green-800 mb-4">Ajouter un nouvel animal</h3>
            
            <form id="addAnimalForm" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Nom -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nom de l'animal *</label>
                        <input type="text" 
                               class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-1 focus:ring-green-500"
                               placeholder="Ex: Simba"
                               required>
                    </div>
                    
                    <!-- Espèce -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Espèce *</label>
                        <input type="text" 
                               class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-1 focus:ring-green-500"
                               placeholder="Ex: Lion d'Afrique"
                               required>
                    </div>
                    
                    <!-- Pays d'origine -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Pays d'origine *</label>
                        <input type="text" 
                               class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-1 focus:ring-green-500"
                               placeholder="Ex: Kenya"
                               required>
                    </div>
                    
                    <!-- Habitat -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Habitat *</label>
                        <select class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-1 focus:ring-green-500" required>
                            <option value="">Sélectionner un habitat</option>
                            <option value="1">Savane</option>
                            <option value="2">Forêt Tropicale</option>
                            <option value="3">Désert</option>
                            <option value="4">Jungle</option>
                            <option value="5">Montagne</option>
                            <option value="6">Zone Humide</option>
                        </select>
                    </div>
                </div>
                
                <!-- Description -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-1 focus:ring-green-500" 
                              rows="3" 
                              placeholder="Description de l'animal..."></textarea>
                </div>
                
                <!-- Image -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Image de l'animal</label>
                    <input type="file" 
                           class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-1 focus:ring-green-500"
                           accept="image/*">
                    <p class="text-xs text-gray-500 mt-1">Formats acceptés: JPG, PNG, GIF (max. 5MB)</p>
                </div>
                
                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit" 
                            class="px-6 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">
                        Enregistrer l'animal
                    </button>
                    <button type="reset" 
                            class="px-6 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 transition ml-3">
                        Effacer
                    </button>
                </div>
            </form>
        </div>

        <!-- Animals Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <!-- Table Header -->
            <div class="px-6 py-4 border-b">
                <h3 class="text-lg font-bold text-gray-800">Liste des animaux</h3>
                <p class="text-sm text-gray-600 mt-1">245 animaux enregistrés</p>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Image</th>
                            <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Nom</th>
                            <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Espèce</th>
                            <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Pays d'origine</th>
                            <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Habitat</th>
                            <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        
                        <!-- Animal 1 -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">
                                <div class="w-16 h-16 bg-amber-100 rounded overflow-hidden flex items-center justify-center">
                                    <span class="text-2xl">🦁</span>
                                </div>
                            </td>
                            <td class="py-3 px-4">
                                <div class="font-medium text-gray-900">Simba</div>
                                <div class="text-xs text-gray-500">Mâle, 5 ans</div>
                            </td>
                            <td class="py-3 px-4">
                                <span class="font-medium text-gray-700">Lion d'Afrique</span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-blue-100 text-blue-800">
                                    Kenya
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-green-100 text-green-800">
                                    Savane
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <div class="flex space-x-2">
                                    <a href="animal-form.php?id=1" 
                                       class="px-3 py-1 text-xs bg-blue-100 text-blue-700 rounded hover:bg-blue-200">
                                        Modifier
                                    </a>
                                    <button class="px-3 py-1 text-xs bg-red-100 text-red-700 rounded hover:bg-red-200">
                                        Supprimer
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Animal 2 -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">
                                <div class="w-16 h-16 bg-green-100 rounded overflow-hidden flex items-center justify-center">
                                    <span class="text-2xl">🐘</span>
                                </div>
                            </td>
                            <td class="py-3 px-4">
                                <div class="font-medium text-gray-900">Dumbo</div>
                                <div class="text-xs text-gray-500">Mâle, 15 ans</div>
                            </td>
                            <td class="py-3 px-4">
                                <span class="font-medium text-gray-700">Éléphant d'Afrique</span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-blue-100 text-blue-800">
                                    Botswana
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-green-100 text-green-800">
                                    Savane
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <div class="flex space-x-2">
                                    <a href="animal-form.php?id=2" 
                                       class="px-3 py-1 text-xs bg-blue-100 text-blue-700 rounded hover:bg-blue-200">
                                        Modifier
                                    </a>
                                    <button class="px-3 py-1 text-xs bg-red-100 text-red-700 rounded hover:bg-red-200">
                                        Supprimer
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Animal 3 -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">
                                <div class="w-16 h-16 bg-amber-50 rounded overflow-hidden flex items-center justify-center">
                                    <span class="text-2xl">🦒</span>
                                </div>
                            </td>
                            <td class="py-3 px-4">
                                <div class="font-medium text-gray-900">Gigi</div>
                                <div class="text-xs text-gray-500">Femelle, 7 ans</div>
                            </td>
                            <td class="py-3 px-4">
                                <span class="font-medium text-gray-700">Girafe Masaï</span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-blue-100 text-blue-800">
                                    Tanzanie
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-green-100 text-green-800">
                                    Savane
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <div class="flex space-x-2">
                                    <a href="animal-form.php?id=3" 
                                       class="px-3 py-1 text-xs bg-blue-100 text-blue-700 rounded hover:bg-blue-200">
                                        Modifier
                                    </a>
                                    <button class="px-3 py-1 text-xs bg-red-100 text-red-700 rounded hover:bg-red-200">
                                        Supprimer
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Animal 4 -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">
                                <div class="w-16 h-16 bg-red-100 rounded overflow-hidden flex items-center justify-center">
                                    <span class="text-2xl">🦓</span>
                                </div>
                            </td>
                            <td class="py-3 px-4">
                                <div class="font-medium text-gray-900">Ziggy</div>
                                <div class="text-xs text-gray-500">Mâle, 4 ans</div>
                            </td>
                            <td class="py-3 px-4">
                                <span class="font-medium text-gray-700">Zèbre de plaine</span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-blue-100 text-blue-800">
                                    Afrique du Sud
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-green-100 text-green-800">
                                    Savane
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <div class="flex space-x-2">
                                    <a href="animal-form.php?id=4" 
                                       class="px-3 py-1 text-xs bg-blue-100 text-blue-700 rounded hover:bg-blue-200">
                                        Modifier
                                    </a>
                                    <button class="px-3 py-1 text-xs bg-red-100 text-red-700 rounded hover:bg-red-200">
                                        Supprimer
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Animal 5 -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">
                                <div class="w-16 h-16 bg-blue-100 rounded overflow-hidden flex items-center justify-center">
                                    <span class="text-2xl">🐒</span>
                                </div>
                            </td>
                            <td class="py-3 px-4">
                                <div class="font-medium text-gray-900">Kiko</div>
                                <div class="text-xs text-gray-500">Mâle, 3 ans</div>
                            </td>
                            <td class="py-3 px-4">
                                <span class="font-medium text-gray-700">Chimpanzé</span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-blue-100 text-blue-800">
                                    République du Congo
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-green-100 text-green-800">
                                    Forêt Tropicale
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <div class="flex space-x-2">
                                    <a href="animal-form.php?id=5" 
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
                        Affichage de 5 animaux sur 245
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
        <div class="mt-6 p-4 bg-amber-50 rounded-lg">
            <h3 class="text-lg font-medium text-amber-800 mb-3">Actions rapides</h3>
            <div class="flex flex-wrap gap-3">
                <button class="px-4 py-2 bg-white text-amber-700 rounded text-sm hover:bg-amber-100 border border-amber-200">
                    📋 Exporter la liste
                </button>
                <button class="px-4 py-2 bg-white text-green-700 rounded text-sm hover:bg-green-100 border border-green-200">
                    🖼️ Gérer les images
                </button>
                <button class="px-4 py-2 bg-white text-blue-700 rounded text-sm hover:bg-blue-100 border border-blue-200">
                    📊 Voir les statistiques
                </button>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="mt-8 bg-white shadow border-t">
        <div class="container mx-auto px-4 py-4">
            <div class="text-center text-gray-600 text-sm">
                <p>&copy; 2025 Zoo Virtuel ASSAD - CAN 2025</p>
                <p class="mt-1 text-xs">Page de gestion des animaux</p>
            </div>
        </div>
    </footer>

    <!-- Simple JavaScript for form validation -->
    <script>
        document.getElementById('addAnimalForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simple validation
            const inputs = this.querySelectorAll('input[required], select[required]');
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
                alert('Formulaire soumis avec succès! (Dans une version PHP, les données seraient envoyées au serveur)');
                this.reset();
            } else {
                alert('Veuillez remplir tous les champs obligatoires');
            }
        });
    </script>

</body>
</html>