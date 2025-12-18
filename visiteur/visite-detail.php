<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zoo Virtuel ASSAD - Détail de la visite guidée">
    <title>Safari dans la Savane - Zoo Virtuel ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-amber-50 via-green-50 to-yellow-50 min-h-screen">
    
    <!-- Header / Navigation -->
    <header class="bg-white shadow-md border-b border-amber-100">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between flex-wrap gap-4">
                <div class="flex items-center">
                    <div class="bg-gradient-to-r from-amber-600 to-green-700 text-white px-4 py-2 rounded-lg shadow-md">
                        <h1 class="text-xl font-bold">🦁 Zoo ASSAD</h1>
                    </div>
                </div>
                <ul class="flex items-center space-x-6">
                    <li><a href="animaux.php" class="text-gray-600 hover:text-green-700 font-medium transition duration-200">Animaux</a></li>
                    <li><a href="visites.php" class="text-green-700 font-semibold hover:text-green-800 transition duration-200">Visites guidées</a></li>
                    <li><a href="../logout.php" class="text-red-600 hover:text-red-700 font-medium transition duration-200">Déconnexion</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Contenu principal -->
    <main class="container mx-auto px-4 py-8">
        
        <!-- Bouton retour -->
        <div class="mb-6">
            <a href="visites.php" class="inline-flex items-center text-green-700 hover:text-green-800 font-semibold transition duration-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Retour à la liste des visites
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Colonne principale -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- Card principale -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-amber-100">
                    
                    <!-- En-tête avec image -->
                    <div class="h-64 bg-gradient-to-br from-amber-300 via-orange-300 to-yellow-400 flex items-center justify-center relative">
                        <span class="text-8xl">🦁</span>
                        <div class="absolute top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-full shadow-lg font-semibold text-sm">
                            Disponible
                        </div>
                    </div>

                    <div class="p-8">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Safari dans la Savane</h2>
                        
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Plongez au cœur de la savane africaine et découvrez les majestueux prédateurs et herbivores qui peuplent cet écosystème fascinant. 
                            Notre guide expert vous emmènera à la rencontre des lions, zèbres, girafes et bien d'autres espèces emblématiques.
                        </p>

                        <!-- Informations détaillées -->
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-6">
                            <div class="bg-amber-50 p-4 rounded-lg border border-amber-200">
                                <p class="text-xs text-gray-600 mb-1">Date</p>
                                <p class="font-bold text-gray-800">20 Jan 2025</p>
                            </div>
                            <div class="bg-green-50 p-4 rounded-lg border border-green-200">
                                <p class="text-xs text-gray-600 mb-1">Heure</p>
                                <p class="font-bold text-gray-800">10:00</p>
                            </div>
                            <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                                <p class="text-xs text-gray-600 mb-1">Durée</p>
                                <p class="font-bold text-gray-800">2h30</p>
                            </div>
                            <div class="bg-purple-50 p-4 rounded-lg border border-purple-200">
                                <p class="text-xs text-gray-600 mb-1">Langue</p>
                                <p class="font-bold text-gray-800">Français</p>
                            </div>
                            <div class="bg-yellow-50 p-4 rounded-lg border border-yellow-200">
                                <p class="text-xs text-gray-600 mb-1">Capacité</p>
                                <p class="font-bold text-gray-800">8 / 20</p>
                            </div>
                            <div class="bg-green-50 p-4 rounded-lg border border-green-200">
                                <p class="text-xs text-gray-600 mb-1">Prix</p>
                                <p class="font-bold text-green-700 text-lg">150 MAD</p>
                            </div>
                        </div>

                        <!-- Parcours de la visite -->
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Parcours de la visite</h3>
                            <ol class="space-y-3">
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 w-8 h-8 bg-amber-600 text-white rounded-full flex items-center justify-center font-bold mr-3">1</span>
                                    <div>
                                        <p class="font-semibold text-gray-800">Accueil et introduction</p>
                                        <p class="text-sm text-gray-600">Présentation du guide et briefing de sécurité</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 w-8 h-8 bg-amber-600 text-white rounded-full flex items-center justify-center font-bold mr-3">2</span>
                                    <div>
                                        <p class="font-semibold text-gray-800">Zone des lions</p>
                                        <p class="text-sm text-gray-600">Observation des lions d'Afrique et de l'Atlas</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 w-8 h-8 bg-amber-600 text-white rounded-full flex items-center justify-center font-bold mr-3">3</span>
                                    <div>
                                        <p class="font-semibold text-gray-800">Espace herbivores</p>
                                        <p class="text-sm text-gray-600">Rencontre avec les zèbres, girafes et antilopes</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 w-8 h-8 bg-amber-600 text-white rounded-full flex items-center justify-center font-bold mr-3">4</span>
                                    <div>
                                        <p class="font-semibold text-gray-800">Point d'observation panoramique</p>
                                        <p class="text-sm text-gray-600">Vue d'ensemble sur la savane reconstituée</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 w-8 h-8 bg-amber-600 text-white rounded-full flex items-center justify-center font-bold mr-3">5</span>
                                    <div>
                                        <p class="font-semibold text-gray-800">Session questions-réponses</p>
                                        <p class="text-sm text-gray-600">Échanges avec le guide et conclusion</p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- Section commentaires -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border border-amber-100">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Avis des visiteurs</h3>
                    
                    <div class="space-y-6">
                        <!-- Commentaire 1 -->
                        <div class="border-b border-gray-200 pb-6">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="font-semibold text-gray-800">Sophie Martin</p>
                                    <p class="text-sm text-gray-500">15 Décembre 2024</p>
                                </div>
                                <div class="flex text-yellow-500">
                                    ★★★★★
                                </div>
                            </div>
                            <p class="text-gray-700">Visite exceptionnelle ! Le guide était passionné et très compétent. J'ai adoré la proximité avec les animaux et les explications détaillées sur leur comportement.</p>
                        </div>

                        <!-- Commentaire 2 -->
                        <div class="border-b border-gray-200 pb-6">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="font-semibold text-gray-800">Ahmed Bennani</p>
                                    <p class="text-sm text-gray-500">10 Décembre 2024</p>
                                </div>
                                <div class="flex text-yellow-500">
                                    ★★★★☆
                                </div>
                            </div>
                            <p class="text-gray-700">Très belle expérience en famille. Mes enfants ont été captivés du début à la fin. Le parcours est bien organisé et les animaux sont magnifiques.</p>
                        </div>

                        <!-- Commentaire 3 -->
                        <div>
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="font-semibold text-gray-800">Fatima Alaoui</p>
                                    <p class="text-sm text-gray-500">5 Décembre 2024</p>
                                </div>
                                <div class="flex text-yellow-500">
                                    ★★★★★
                                </div>
                            </div>
                            <p class="text-gray-700">Une expérience inoubliable ! J'ai appris énormément de choses sur la faune africaine. Le guide maîtrise parfaitement son sujet.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colonne latérale - Formulaire de réservation -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-xl p-6 border border-amber-100 sticky top-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Réserver cette visite</h3>
                    
                    <form action="reservation.php" method="POST" class="space-y-5">
                        <input type="hidden" name="visite_id" value="1">
                        
                        <!-- Nombre de personnes -->
                        <div>
                            <label for="nb_personnes" class="block text-sm font-medium text-gray-700 mb-2">
                                Nombre de personnes
                            </label>
                            <input 
                                type="number" 
                                id="nb_personnes" 
                                name="nb_personnes" 
                                min="1" 
                                max="10" 
                                value="1"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent outline-none transition duration-200"
                            >
                            <p class="text-xs text-gray-500 mt-2">Maximum 10 personnes par réservation</p>
                        </div>

                        <!-- Récapitulatif prix -->
                        <div class="bg-green-50 p-4 rounded-lg border border-green-200">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-700">Prix unitaire</span>
                                <span class="font-semibold text-gray-800">150 MAD</span>
                            </div>
                            <div class="flex justify-between items-center pt-2 border-t border-green-300">
                                <span class="font-bold text-gray-800">Total</span>
                                <span class="font-bold text-green-700 text-xl">150 MAD</span>
                            </div>
                        </div>

                        <!-- Bouton réserver -->
                        <button 
                            type="submit"
                            class="w-full bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white font-semibold py-3 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105"
                        >
                            Réserver maintenant
                        </button>

                        <!-- Informations supplémentaires -->
                        <div class="bg-amber-50 border border-amber-200 rounded-lg p-3">
                            <p class="text-xs text-amber-800 flex items-start">
                                <svg class="w-4 h-4 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                </svg>
                                Confirmation immédiate par email après réservation
                            </p>
                        </div>
                    </form>
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