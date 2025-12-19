<?php
require '../db.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrateur - Zoo Virtuel ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-amber-50 via-green-50 to-yellow-50 min-h-screen">
    
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-600 to-green-700 rounded-full flex items-center justify-center">
                        <span class="text-white text-2xl font-bold">🦁</span>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-green-800">Zoo Virtuel ASSAD</h1>
                        <p class="text-sm text-gray-600">CAN 2025 - Administration</p>
                    </div>
                </div>
                <nav class="flex items-center space-x-4">
                    <a href="admin-dashboard.php" class="text-gray-700 hover:text-green-700 font-medium transition">Dashboard</a>
                    <a href="../logout.php" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition">Déconnexion</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        
        <!-- Welcome Section -->
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-green-800 mb-2">Tableau de bord administrateur</h2>
            <p class="text-gray-600">Bienvenue sur votre espace d'administration</p>
        </div>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-8">
            <!-- Total Utilisateurs -->
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition">
                <div class="flex items-center justify-between mb-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center">
                        <span class="text-white text-2xl">👥</span>
                    </div>
                </div>
                <p class="text-gray-600 text-sm mb-1">Total utilisateurs</p>
                <p class="text-3xl font-bold text-blue-600">156</p>
            </div>

            <!-- Total Visiteurs -->
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition">
                <div class="flex items-center justify-between mb-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center">
                        <span class="text-white text-2xl">🎫</span>
                    </div>
                </div>
                <p class="text-gray-600 text-sm mb-1">Total visiteurs</p>
                <p class="text-3xl font-bold text-green-600">128</p>
            </div>

            <!-- Total Guides -->
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition">
                <div class="flex items-center justify-between mb-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-amber-600 rounded-full flex items-center justify-center">
                        <span class="text-white text-2xl">🎯</span>
                    </div>
                </div>
                <p class="text-gray-600 text-sm mb-1">Total guides</p>
                <p class="text-3xl font-bold text-amber-600">18</p>
            </div>

            <!-- Total Animaux -->
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition">
                <div class="flex items-center justify-between mb-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center">
                        <span class="text-white text-2xl">🦒</span>
                    </div>
                </div>
                <p class="text-gray-600 text-sm mb-1">Total animaux</p>
                <p class="text-3xl font-bold text-yellow-600">245</p>
            </div>

            <!-- Total Visites Guidées -->
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition">
                <div class="flex items-center justify-between mb-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center">
                        <span class="text-white text-2xl">📋</span>
                    </div>
                </div>
                <p class="text-gray-600 text-sm mb-1">Visites guidées</p>
                <p class="text-3xl font-bold text-purple-600">42</p>
            </div>
        </div>

        <!-- Action Cards Section -->
        <div class="mb-8">
            <h3 class="text-2xl font-bold text-green-800 mb-6">Gestion rapide</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Gérer Utilisateurs -->
                <a href="utilisateurs.php" class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-4">
                        <span class="text-white text-3xl">👤</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Gérer utilisateurs</h4>
                    <p class="text-gray-600 text-sm mb-4">Administrer les comptes utilisateurs du zoo</p>
                    <div class="flex items-center text-blue-600 font-semibold">
                        <span>Accéder</span>
                        <span class="ml-2">→</span>
                    </div>
                </a>

                <!-- Gérer Animaux -->
                <a href="animaux.php" class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mb-4">
                        <span class="text-white text-3xl">🐾</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Gérer animaux</h4>
                    <p class="text-gray-600 text-sm mb-4">Administrer la collection d'animaux du zoo</p>
                    <div class="flex items-center text-green-600 font-semibold">
                        <span>Accéder</span>
                        <span class="ml-2">→</span>
                    </div>
                </a>

                <!-- Gérer Habitats -->
                <a href="habitats.php" class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-amber-600 rounded-2xl flex items-center justify-center mb-4">
                        <span class="text-white text-3xl">🏞️</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Gérer habitats</h4>
                    <p class="text-gray-600 text-sm mb-4">Administrer les habitats et environnements</p>
                    <div class="flex items-center text-amber-600 font-semibold">
                        <span>Accéder</span>
                        <span class="ml-2">→</span>
                    </div>
                </a>

                <!-- Statistiques -->
                <a href="statistiques.php" class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-4">
                        <span class="text-white text-3xl">📊</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Statistiques</h4>
                    <p class="text-gray-600 text-sm mb-4">Consulter les statistiques détaillées</p>
                    <div class="flex items-center text-purple-600 font-semibold">
                        <span>Accéder</span>
                        <span class="ml-2">→</span>
                    </div>
                </a>

            </div>
        </div>

        <!-- Recent Activity Section -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4">Activité récente</h3>
            <div class="space-y-4">
                
                <div class="flex items-start space-x-4 pb-4 border-b border-gray-200">
                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-green-600">✓</span>
                    </div>
                    <div>
                        <p class="text-gray-800 font-medium">Nouvel animal ajouté</p>
                        <p class="text-sm text-gray-600">Lion d'Afrique - Simba a été ajouté à l'habitat Savane</p>
                        <p class="text-xs text-gray-500 mt-1">Il y a 2 heures</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4 pb-4 border-b border-gray-200">
                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-blue-600">👤</span>
                    </div>
                    <div>
                        <p class="text-gray-800 font-medium">Nouveau guide enregistré</p>
                        <p class="text-sm text-gray-600">Fatima Zahra a créé un compte guide</p>
                        <p class="text-xs text-gray-500 mt-1">Il y a 5 heures</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4 pb-4 border-b border-gray-200">
                    <div class="w-10 h-10 bg-amber-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-amber-600">🏞️</span>
                    </div>
                    <div>
                        <p class="text-gray-800 font-medium">Habitat mis à jour</p>
                        <p class="text-sm text-gray-600">L'habitat Forêt Tropicale a été modifié</p>
                        <p class="text-xs text-gray-500 mt-1">Il y a 1 jour</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-purple-600">📋</span>
                    </div>
                    <div>
                        <p class="text-gray-800 font-medium">Nouvelle visite guidée créée</p>
                        <p class="text-sm text-gray-600">Safari des Fauves d'Afrique programmé pour le 25/01/2025</p>
                        <p class="text-xs text-gray-500 mt-1">Il y a 2 jours</p>
                    </div>
                </div>

            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-md mt-12">
        <div class="container mx-auto px-4 py-6">
            <div class="text-center text-gray-600 text-sm">
                <p>&copy; 2025 Zoo Virtuel ASSAD - CAN 2025. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

</body>
</html>