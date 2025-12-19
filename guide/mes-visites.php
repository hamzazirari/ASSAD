<?php
require '../db.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes visites guidées - Zoo Virtuel ASSAD</title>
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
                        <p class="text-sm text-gray-600">CAN 2025</p>
                    </div>
                </div>
                <nav class="flex items-center space-x-4">
                    <a href="dashboard.php" class="text-gray-700 hover:text-green-700 font-medium transition">Dashboard</a>
                    <a href="../logout.php" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition">Déconnexion</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        
        <!-- Page Title -->
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-green-800 mb-2">Mes visites guidées</h2>
            <p class="text-gray-600">Gérez vos visites guidées : modifier, annuler ou gérer les étapes</p>
        </div>

        <!-- Visites Table - Desktop -->
        <div class="hidden md:block bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gradient-to-r from-green-600 to-green-700 text-white">
                        <tr>
                            <th class="px-6 py-4 text-left font-semibold">Titre de la visite</th>
                            <th class="px-6 py-4 text-left font-semibold">Date</th>
                            <th class="px-6 py-4 text-left font-semibold">Heure</th>
                            <th class="px-6 py-4 text-left font-semibold">Langue</th>
                            <th class="px-6 py-4 text-left font-semibold">Prix</th>
                            <th class="px-6 py-4 text-left font-semibold">Statut</th>
                            <th class="px-6 py-4 text-center font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-green-50 transition">
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-800">Safari des Fauves d'Afrique</div>
                            </td>
                            <td class="px-6 py-4 text-gray-700">15/01/2025</td>
                            <td class="px-6 py-4 text-gray-700">10:00</td>
                            <td class="px-6 py-4 text-gray-700">Français</td>
                            <td class="px-6 py-4 text-gray-700 font-semibold">25€</td>
                            <td class="px-6 py-4">
                                <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Active</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center space-x-2">
                                    <a href="visite-form.php?id=1" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg text-sm transition">Modifier</a>
                                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg text-sm transition">Annuler</button>
                                    <a href="etapes.php?id=1" class="bg-amber-500 hover:bg-amber-600 text-white px-3 py-1 rounded-lg text-sm transition">Étapes</a>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-green-50 transition">
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-800">Découverte des Primates</div>
                            </td>
                            <td class="px-6 py-4 text-gray-700">16/01/2025</td>
                            <td class="px-6 py-4 text-gray-700">14:30</td>
                            <td class="px-6 py-4 text-gray-700">Anglais</td>
                            <td class="px-6 py-4 text-gray-700 font-semibold">20€</td>
                            <td class="px-6 py-4">
                                <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Active</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center space-x-2">
                                    <a href="visite-form.php?id=2" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg text-sm transition">Modifier</a>
                                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg text-sm transition">Annuler</button>
                                    <a href="etapes.php?id=2" class="bg-amber-500 hover:bg-amber-600 text-white px-3 py-1 rounded-lg text-sm transition">Étapes</a>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-green-50 transition">
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-800">Monde des Reptiles</div>
                            </td>
                            <td class="px-6 py-4 text-gray-700">18/01/2025</td>
                            <td class="px-6 py-4 text-gray-700">11:00</td>
                            <td class="px-6 py-4 text-gray-700">Espagnol</td>
                            <td class="px-6 py-4 text-gray-700 font-semibold">18€</td>
                            <td class="px-6 py-4">
                                <span class="inline-block bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-medium">Annulée</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center space-x-2">
                                    <a href="visite-form.php?id=3" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg text-sm transition">Modifier</a>
                                    <button class="bg-gray-400 text-white px-3 py-1 rounded-lg text-sm cursor-not-allowed" disabled>Annuler</button>
                                    <a href="etapes.php?id=3" class="bg-amber-500 hover:bg-amber-600 text-white px-3 py-1 rounded-lg text-sm transition">Étapes</a>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-green-50 transition">
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-800">Oiseaux Exotiques du Monde</div>
                            </td>
                            <td class="px-6 py-4 text-gray-700">20/01/2025</td>
                            <td class="px-6 py-4 text-gray-700">09:30</td>
                            <td class="px-6 py-4 text-gray-700">Français</td>
                            <td class="px-6 py-4 text-gray-700 font-semibold">22€</td>
                            <td class="px-6 py-4">
                                <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Active</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center space-x-2">
                                    <a href="visite-form.php?id=4" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg text-sm transition">Modifier</a>
                                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg text-sm transition">Annuler</button>
                                    <a href="etapes.php?id=4" class="bg-amber-500 hover:bg-amber-600 text-white px-3 py-1 rounded-lg text-sm transition">Étapes</a>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-green-50 transition">
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-800">Aventure Aquatique</div>
                            </td>
                            <td class="px-6 py-4 text-gray-700">22/01/2025</td>
                            <td class="px-6 py-4 text-gray-700">15:00</td>
                            <td class="px-6 py-4 text-gray-700">Anglais</td>
                            <td class="px-6 py-4 text-gray-700 font-semibold">30€</td>
                            <td class="px-6 py-4">
                                <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Active</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center space-x-2">
                                    <a href="visite-form.php?id=5" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg text-sm transition">Modifier</a>
                                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg text-sm transition">Annuler</button>
                                    <a href="etapes.php?id=5" class="bg-amber-500 hover:bg-amber-600 text-white px-3 py-1 rounded-lg text-sm transition">Étapes</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Visites Cards - Mobile -->
        <div class="md:hidden space-y-4">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-5">
                <div class="flex items-start justify-between mb-3">
                    <h3 class="text-lg font-bold text-gray-800">Safari des Fauves d'Afrique</h3>
                    <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-medium">Active</span>
                </div>
                <div class="space-y-2 mb-4">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Date:</span>
                        <span class="font-medium text-gray-800">15/01/2025</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Heure:</span>
                        <span class="font-medium text-gray-800">10:00</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Langue:</span>
                        <span class="font-medium text-gray-800">Français</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Prix:</span>
                        <span class="font-bold text-green-700">25€</span>
                    </div>
                </div>
                <div class="flex flex-col space-y-2">
                    <a href="visite-form.php?id=1" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-center text-sm font-medium transition">Modifier</a>
                    <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition">Annuler</button>
                    <a href="etapes.php?id=1" class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg text-center text-sm font-medium transition">Gérer les étapes</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-5">
                <div class="flex items-start justify-between mb-3">
                    <h3 class="text-lg font-bold text-gray-800">Découverte des Primates</h3>
                    <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-medium">Active</span>
                </div>
                <div class="space-y-2 mb-4">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Date:</span>
                        <span class="font-medium text-gray-800">16/01/2025</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Heure:</span>
                        <span class="font-medium text-gray-800">14:30</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Langue:</span>
                        <span class="font-medium text-gray-800">Anglais</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Prix:</span>
                        <span class="font-bold text-green-700">20€</span>
                    </div>
                </div>
                <div class="flex flex-col space-y-2">
                    <a href="visite-form.php?id=2" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-center text-sm font-medium transition">Modifier</a>
                    <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition">Annuler</button>
                    <a href="etapes.php?id=2" class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg text-center text-sm font-medium transition">Gérer les étapes</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-lg p-5">
                <div class="flex items-start justify-between mb-3">
                    <h3 class="text-lg font-bold text-gray-800">Monde des Reptiles</h3>
                    <span class="inline-block bg-red-100 text-red-800 px-3 py-1 rounded-full text-xs font-medium">Annulée</span>
                </div>
                <div class="space-y-2 mb-4">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Date:</span>
                        <span class="font-medium text-gray-800">18/01/2025</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Heure:</span>
                        <span class="font-medium text-gray-800">11:00</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Langue:</span>
                        <span class="font-medium text-gray-800">Espagnol</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Prix:</span>
                        <span class="font-bold text-green-700">18€</span>
                    </div>
                </div>
                <div class="flex flex-col space-y-2">
                    <a href="visite-form.php?id=3" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-center text-sm font-medium transition">Modifier</a>
                    <button class="bg-gray-400 text-white px-4 py-2 rounded-lg text-sm font-medium cursor-not-allowed" disabled>Annuler</button>
                    <a href="etapes.php?id=3" class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg text-center text-sm font-medium transition">Gérer les étapes</a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-2xl shadow-lg p-5">
                <div class="flex items-start justify-between mb-3">
                    <h3 class="text-lg font-bold text-gray-800">Oiseaux Exotiques du Monde</h3>
                    <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-medium">Active</span>
                </div>
                <div class="space-y-2 mb-4">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Date:</span>
                        <span class="font-medium text-gray-800">20/01/2025</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Heure:</span>
                        <span class="font-medium text-gray-800">09:30</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Langue:</span>
                        <span class="font-medium text-gray-800">Français</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Prix:</span>
                        <span class="font-bold text-green-700">22€</span>
                    </div>
                </div>
                <div class="flex flex-col space-y-2">
                    <a href="visite-form.php?id=4" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-center text-sm font-medium transition">Modifier</a>
                    <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition">Annuler</button>
                    <a href="etapes.php?id=4" class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg text-center text-sm font-medium transition">Gérer les étapes</a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="bg-white rounded-2xl shadow-lg p-5">
                <div class="flex items-start justify-between mb-3">
                    <h3 class="text-lg font-bold text-gray-800">Aventure Aquatique</h3>
                    <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-medium">Active</span>
                </div>
                <div class="space-y-2 mb-4">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Date:</span>
                        <span class="font-medium text-gray-800">22/01/2025</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Heure:</span>
                        <span class="font-medium text-gray-800">15:00</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Langue:</span>
                        <span class="font-medium text-gray-800">Anglais</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Prix:</span>
                        <span class="font-bold text-green-700">30€</span>
                    </div>
                </div>
                <div class="flex flex-col space-y-2">
                    <a href="visite-form.php?id=5" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-center text-sm font-medium transition">Modifier</a>
                    <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition">Annuler</button>
                    <a href="etapes.php?id=5" class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg text-center text-sm font-medium transition">Gérer les étapes</a>
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