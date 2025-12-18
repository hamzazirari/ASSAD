<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservations des visites - Zoo Virtuel ASSAD</title>
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
            <h2 class="text-3xl font-bold text-green-800 mb-2">Réservations des visites</h2>
            <p class="text-gray-600">Consultez toutes les réservations effectuées pour vos visites guidées</p>
        </div>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm mb-1">Total réservations</p>
                        <p class="text-3xl font-bold text-green-700">12</p>
                    </div>
                    <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">📋</span>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm mb-1">Visiteurs attendus</p>
                        <p class="text-3xl font-bold text-amber-600">47</p>
                    </div>
                    <div class="w-14 h-14 bg-amber-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">👥</span>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm mb-1">Cette semaine</p>
                        <p class="text-3xl font-bold text-yellow-600">5</p>
                    </div>
                    <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">📅</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reservations Table - Desktop -->
        <div class="hidden md:block bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gradient-to-r from-green-600 to-green-700 text-white">
                        <tr>
                            <th class="px-6 py-4 text-left font-semibold">Nom du visiteur</th>
                            <th class="px-6 py-4 text-left font-semibold">Visite guidée</th>
                            <th class="px-6 py-4 text-center font-semibold">Nombre de personnes</th>
                            <th class="px-6 py-4 text-left font-semibold">Date de réservation</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-green-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-green-500 rounded-full flex items-center justify-center text-white font-bold">
                                        MK
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-800">Mohammed Khalil</div>
                                        <div class="text-sm text-gray-500">khalil.m@email.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-800">Safari des Fauves d'Afrique</div>
                                <div class="text-sm text-gray-500">15/01/2025 - 10:00</div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold">4</span>
                            </td>
                            <td class="px-6 py-4 text-gray-700">12/01/2025</td>
                        </tr>
                        <tr class="hover:bg-green-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-amber-400 to-amber-500 rounded-full flex items-center justify-center text-white font-bold">
                                        SA
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-800">Sara Alami</div>
                                        <div class="text-sm text-gray-500">sara.alami@email.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-800">Safari des Fauves d'Afrique</div>
                                <div class="text-sm text-gray-500">15/01/2025 - 10:00</div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold">2</span>
                            </td>
                            <td class="px-6 py-4 text-gray-700">13/01/2025</td>
                        </tr>
                        <tr class="hover:bg-green-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center text-white font-bold">
                                        YB
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-800">Youssef Bennani</div>
                                        <div class="text-sm text-gray-500">y.bennani@email.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-800">Découverte des Primates</div>
                                <div class="text-sm text-gray-500">16/01/2025 - 14:30</div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold">3</span>
                            </td>
                            <td class="px-6 py-4 text-gray-700">13/01/2025</td>
                        </tr>
                        <tr class="hover:bg-green-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-green-500 rounded-full flex items-center justify-center text-white font-bold">
                                        LH
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-800">Laila Hamdi</div>
                                        <div class="text-sm text-gray-500">laila.h@email.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-800">Découverte des Primates</div>
                                <div class="text-sm text-gray-500">16/01/2025 - 14:30</div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold">5</span>
                            </td>
                            <td class="px-6 py-4 text-gray-700">14/01/2025</td>
                        </tr>
                        <tr class="hover:bg-green-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-amber-400 to-amber-500 rounded-full flex items-center justify-center text-white font-bold">
                                        AE
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-800">Ahmed El Fassi</div>
                                        <div class="text-sm text-gray-500">a.elfassi@email.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-800">Oiseaux Exotiques du Monde</div>
                                <div class="text-sm text-gray-500">20/01/2025 - 09:30</div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold">6</span>
                            </td>
                            <td class="px-6 py-4 text-gray-700">15/01/2025</td>
                        </tr>
                        <tr class="hover:bg-green-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center text-white font-bold">
                                        KN
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-800">Karima Naciri</div>
                                        <div class="text-sm text-gray-500">k.naciri@email.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-800">Oiseaux Exotiques du Monde</div>
                                <div class="text-sm text-gray-500">20/01/2025 - 09:30</div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold">2</span>
                            </td>
                            <td class="px-6 py-4 text-gray-700">16/01/2025</td>
                        </tr>
                        <tr class="hover:bg-green-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-green-500 rounded-full flex items-center justify-center text-white font-bold">
                                        OM
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-800">Omar Mansouri</div>
                                        <div class="text-sm text-gray-500">o.mansouri@email.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-800">Aventure Aquatique</div>
                                <div class="text-sm text-gray-500">22/01/2025 - 15:00</div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold">4</span>
                            </td>
                            <td class="px-6 py-4 text-gray-700">16/01/2025</td>
                        </tr>
                        <tr class="hover:bg-green-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-amber-400 to-amber-500 rounded-full flex items-center justify-center text-white font-bold">
                                        FZ
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-800">Fatima Zahra</div>
                                        <div class="text-sm text-gray-500">f.zahra@email.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-800">Aventure Aquatique</div>
                                <div class="text-sm text-gray-500">22/01/2025 - 15:00</div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold">3</span>
                            </td>
                            <td class="px-6 py-4 text-gray-700">17/01/2025</td>
                        </tr>
                        <tr class="hover:bg-green-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center text-white font-bold">
                                        RB
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-800">Rachid Bouzid</div>
                                        <div class="text-sm text-gray-500">r.bouzid@email.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-800">Safari des Fauves d'Afrique</div>
                                <div class="text-sm text-gray-500">15/01/2025 - 10:00</div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold">2</span>
                            </td>
                            <td class="px-6 py-4 text-gray-700">17/01/2025</td>
                        </tr>
                        <tr class="hover:bg-green-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-green-500 rounded-full flex items-center justify-center text-white font-bold">
                                        NA
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-800">Nadia Amrani</div>
                                        <div class="text-sm text-gray-500">n.amrani@email.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-800">Découverte des Primates</div>
                                <div class="text-sm text-gray-500">16/01/2025 - 14:30</div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold">4</span>
                            </td>
                            <td class="px-6 py-4 text-gray-700">17/01/2025</td>
                        </tr>
                        <tr class="hover:bg-green-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-amber-400 to-amber-500 rounded-full flex items-center justify-center text-white font-bold">
                                        HT
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-800">Hassan Tazi</div>
                                        <div class="text-sm text-gray-500">h.tazi@email.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-800">Oiseaux Exotiques du Monde</div>
                                <div class="text-sm text-gray-500">20/01/2025 - 09:30</div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold">5</span>
                            </td>
                            <td class="px-6 py-4 text-gray-700">18/01/2025</td>
                        </tr>
                        <tr class="hover:bg-green-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center text-white font-bold">
                                        SM
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-800">Samira Mokhtar</div>
                                        <div class="text-sm text-gray-500">s.mokhtar@email.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-800">Aventure Aquatique</div>
                                <div class="text-sm text-gray-500">22/01/2025 - 15:00</div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold">3</span>
                            </td>
                            <td class="px-6 py-4 text-gray-700">18/01/2025</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Reservations Cards - Mobile -->
        <div class="md:hidden space-y-4">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-5">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-green-500 rounded-full flex items-center justify-center text-white font-bold">
                        MK
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800">Mohammed Khalil</h3>
                        <p class="text-sm text-gray-500">khalil.m@email.com</p>
                    </div>
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Visite:</span>
                        <span class="font-medium text-gray-800">Safari des Fauves d'Afrique</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Date visite:</span>
                        <span class="font-medium text-gray-800">15/01/2025 - 10:00</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Personnes:</span>
                        <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold text-xs">4</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Réservé le:</span>
                        <span class="font-medium text-gray-800">12/01/2025</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-5">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-amber-400 to-amber-500 rounded-full flex items-center justify-center text-white font-bold">
                        SA
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800">Sara Alami</h3>
                        <p class="text-sm text-gray-500">sara.alami@email.com</p>
                    </div>
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Visite:</span>
                        <span class="font-medium text-gray-800">Safari des Fauves d'Afrique</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Date visite:</span>
                        <span class="font-medium text-gray-800">15/01/2025 - 10:00</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Personnes:</span>
                        <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold text-xs">2</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Réservé le:</span>
                        <span class="font-medium text-gray-800">13/01/2025</span>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-lg p-5">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center text-white font-bold">
                        YB
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800">Youssef Bennani</h3>
                        <p class="text-sm text-gray-500">y.bennani@email.com</p>
                    </div>
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Visite:</span>
                        <span class="font-medium text-gray-800">Découverte des Primates</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Date visite:</span>
                        <span class="font-medium text-gray-800">16/01/2025 - 14:30</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Personnes:</span>
                        <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold text-xs">3</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Réservé le:</span>
                        <span class="font-medium text-gray-800">13/01/2025</span>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-2xl shadow-lg p-5">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-green-500 rounded-full flex items-center justify-center text-white font-bold">
                        LH
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800">Laila Hamdi</h3>
                        <p class="text-sm text-gray-500">laila.h@email.com</p>
                    </div>
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Visite:</span>
                        <span class="font-medium text-gray-800">Découverte des Primates</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Date visite:</span>
                        <span class="font-medium text-gray-800">16/01/2025 - 14:30</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Personnes:</span>
                        <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold text-xs">5</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Réservé le:</span>
                        <span class="font-medium text-gray-800">14/01/2025</span>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="bg-white rounded-2xl shadow-lg p-5">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-amber-400 to-amber-500 rounded-full flex items-center justify-center text-white font-bold">
                        AE
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800">