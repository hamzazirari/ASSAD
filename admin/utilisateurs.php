<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Utilisateurs - Zoo Virtuel ASSAD</title>
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
                    <a href="utilisateurs.php" class="text-green-700 font-medium border-b-2 border-green-600">Utilisateurs</a>
                    <a href="../logout.php" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">Déconnexion</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-6">
        
        <!-- Page Title -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-green-800 mb-2">Gestion des utilisateurs</h2>
            <p class="text-gray-600">Administrez les comptes utilisateurs du zoo</p>
        </div>

        <!-- PHP Comment: Ici on pourra mettre les statistiques dynamiques -->
        <!--
        <?php 
        // Exemple de code PHP à ajouter plus tard :
        // $total_utilisateurs = 156;
        // $total_guides = 18;
        // $en_attente = 10;
        ?>
        -->

        <!-- Statistics Cards - Simple version -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-white rounded-lg shadow p-4 border-l-4 border-blue-500">
                <p class="text-sm text-gray-600">Total utilisateurs</p>
                <p class="text-xl font-bold text-blue-600">156</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4 border-l-4 border-green-500">
                <p class="text-sm text-gray-600">Guides</p>
                <p class="text-xl font-bold text-green-600">18</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4 border-l-4 border-amber-500">
                <p class="text-sm text-gray-600">En attente d'approbation</p>
                <p class="text-xl font-bold text-amber-600">10</p>
            </div>
        </div>

        <!-- Users Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            
            <!-- PHP Comment: Ici on pourra ajouter une barre de recherche dynamique -->
            <!--
            <div class="px-4 py-3 border-b">
                <form method="GET" class="flex">
                    <input type="text" name="search" placeholder="Rechercher un utilisateur..." 
                           class="flex-grow px-3 py-2 border rounded-l focus:outline-none focus:ring-1 focus:ring-green-500">
                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-r hover:bg-green-700">
                        Rechercher
                    </button>
                </form>
            </div>
            -->

            <!-- PHP Comment: Structure de boucle à implémenter -->
            <!--
            <?php 
            // Exemple de boucle PHP pour remplacer les données statiques :
            // foreach($utilisateurs as $user) {
            //     // Affichage de chaque utilisateur
            // }
            ?>
            -->

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Nom</th>
                            <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Email</th>
                            <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Rôle</th>
                            <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Statut</th>
                            <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Approbation</th>
                            <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        
                        <!-- PHP Comment: Exemple de ligne - À remplacer par une boucle PHP -->
                        <!-- Ligne 1 - Visiteur -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">
                                <div class="font-medium text-gray-900">Mohamed Amine</div>
                                <div class="text-xs text-gray-500">Inscrit le 15/01/2025</div>
                            </td>
                            <td class="py-3 px-4 text-gray-700">mohamed.amine@email.com</td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-green-100 text-green-800">
                                    Visiteur
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-green-100 text-green-800">
                                    Actif
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="text-gray-400">—</span>
                            </td>
                            <td class="py-3 px-4">
                                <button class="px-3 py-1 text-xs bg-red-100 text-red-700 rounded hover:bg-red-200">
                                    Désactiver
                                </button>
                            </td>
                        </tr>

                        <!-- Ligne 2 - Guide approuvé -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">
                                <div class="font-medium text-gray-900">Fatima Zahra</div>
                                <div class="text-xs text-gray-500">Inscrit le 10/01/2025</div>
                            </td>
                            <td class="py-3 px-4 text-gray-700">fatima.zahra@email.com</td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-amber-100 text-amber-800">
                                    Guide
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-green-100 text-green-800">
                                    Actif
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-green-100 text-green-800">
                                    Approuvé
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <button class="px-3 py-1 text-xs bg-red-100 text-red-700 rounded hover:bg-red-200">
                                    Désactiver
                                </button>
                            </td>
                        </tr>

                        <!-- Ligne 3 - Guide non approuvé -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">
                                <div class="font-medium text-gray-900">Karim Riad</div>
                                <div class="text-xs text-gray-500">Inscrit le 05/01/2025</div>
                            </td>
                            <td class="py-3 px-4 text-gray-700">karim.riad@email.com</td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-amber-100 text-amber-800">
                                    Guide
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-red-100 text-red-800">
                                    Désactivé
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-gray-200 text-gray-800">
                                    En attente
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <div class="flex space-x-2">
                                    <button class="px-3 py-1 text-xs bg-green-100 text-green-700 rounded hover:bg-green-200">
                                        Activer
                                    </button>
                                    <button class="px-3 py-1 text-xs bg-blue-100 text-blue-700 rounded hover:bg-blue-200">
                                        Approuver
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Ligne 4 - Visiteur -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">
                                <div class="font-medium text-gray-900">Sofia Ahmed</div>
                                <div class="text-xs text-gray-500">Inscrit le 20/01/2025</div>
                            </td>
                            <td class="py-3 px-4 text-gray-700">sofia.ahmed@email.com</td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-green-100 text-green-800">
                                    Visiteur
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-green-100 text-green-800">
                                    Actif
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="text-gray-400">—</span>
                            </td>
                            <td class="py-3 px-4">
                                <button class="px-3 py-1 text-xs bg-red-100 text-red-700 rounded hover:bg-red-200">
                                    Désactiver
                                </button>
                            </td>
                        </tr>

                        <!-- Ligne 5 - Guide en attente -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">
                                <div class="font-medium text-gray-900">Youssef Benali</div>
                                <div class="text-xs text-gray-500">Inscrit le 18/01/2025</div>
                            </td>
                            <td class="py-3 px-4 text-gray-700">youssef.benali@email.com</td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-amber-100 text-amber-800">
                                    Guide
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-green-100 text-green-800">
                                    Actif
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs font-medium rounded bg-gray-200 text-gray-800">
                                    En attente
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <div class="flex space-x-2">
                                    <button class="px-3 py-1 text-xs bg-red-100 text-red-700 rounded hover:bg-red-200">
                                        Désactiver
                                    </button>
                                    <button class="px-3 py-1 text-xs bg-blue-100 text-blue-700 rounded hover:bg-blue-200">
                                        Approuver
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- PHP Comment: Fin de la boucle PHP -->
                        <!--
                        <?php 
                        // } // Fin de la boucle foreach
                        ?>
                        -->

                    </tbody>
                </table>
            </div>

            <!-- Pagination - Simple -->
            <div class="px-4 py-3 border-t">
                <div class="flex items-center justify-between">
                    <div class="text-sm text-gray-600">
                        Affichage de 5 utilisateurs
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
                            Suivant
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="mt-6">
            <h3 class="text-lg font-medium text-gray-800 mb-3">Actions rapides</h3>
            <div class="flex flex-wrap gap-3">
                <button class="px-4 py-2 bg-blue-100 text-blue-700 rounded text-sm hover:bg-blue-200">
                    📧 Envoyer email à tous
                </button>
                <button class="px-4 py-2 bg-green-100 text-green-700 rounded text-sm hover:bg-green-200">
                    📄 Exporter les données
                </button>
                <button class="px-4 py-2 bg-amber-100 text-amber-700 rounded text-sm hover:bg-amber-200">
                    ✅ Approuver tous les guides
                </button>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="mt-8 bg-white shadow border-t">
        <div class="container mx-auto px-4 py-4">
            <div class="text-center text-gray-600 text-sm">
                <p>&copy; 2025 Zoo Virtuel ASSAD - CAN 2025</p>
                <p class="mt-1 text-xs">Page de gestion des utilisateurs</p>
            </div>
        </div>
    </footer>

</body>
</html>