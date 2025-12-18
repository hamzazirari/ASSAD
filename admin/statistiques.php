<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques - Zoo Virtuel ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    
    <!-- Header (identique) -->
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
                    <a href="stats.php" class="text-green-700 font-medium border-b-2 border-green-600">Statistiques</a>
                    <a href="../logout.php" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">Déconnexion</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        
        <!-- Page Title -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-green-800">Statistiques</h2>
        </div>

        <!-- 5 Simple Cards with Icons -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
            
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow p-4">
                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mb-2">
                    <span class="text-blue-600 text-lg">👥</span>
                </div>
                <div class="text-xl font-bold text-blue-600">156</div>
                <div class="text-sm text-gray-600">Utilisateurs</div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow p-4">
                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mb-2">
                    <span class="text-green-600 text-lg">🎫</span>
                </div>
                <div class="text-xl font-bold text-green-600">128</div>
                <div class="text-sm text-gray-600">Visiteurs</div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow p-4">
                <div class="w-10 h-10 bg-amber-100 rounded-lg flex items-center justify-center mb-2">
                    <span class="text-amber-600 text-lg">🎯</span>
                </div>
                <div class="text-xl font-bold text-amber-600">18</div>
                <div class="text-sm text-gray-600">Guides</div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-lg shadow p-4">
                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center mb-2">
                    <span class="text-yellow-600 text-lg">🦒</span>
                </div>
                <div class="text-xl font-bold text-yellow-600">245</div>
                <div class="text-sm text-gray-600">Animaux</div>
            </div>

            <!-- Card 5 -->
            <div class="bg-white rounded-lg shadow p-4">
                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mb-2">
                    <span class="text-purple-600 text-lg">📋</span>
                </div>
                <div class="text-xl font-bold text-purple-600">42</div>
                <div class="text-sm text-gray-600">Visites guidées</div>
            </div>

        </div>

    </main>

    <!-- Footer -->
    <footer class="mt-12 bg-white shadow border-t">
        <div class="container mx-auto px-4 py-4">
            <div class="text-center text-gray-600 text-sm">
                <p>&copy; 2025 Zoo Virtuel ASSAD - CAN 2025</p>
            </div>
        </div>
    </footer>

</body>
</html>