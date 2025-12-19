<?php
require '../db.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zoo Virtuel ASSAD - Ajouter les étapes d'une visite">
    <title>Ajouter des étapes - Zoo Virtuel ASSAD</title>
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
                        <a href="dashboard.php" class="text-gray-600 hover:text-green-700 font-medium transition duration-200">
                            Dashboard
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
                href="dashboard.php" 
                class="inline-flex items-center text-green-700 hover:text-green-800 font-semibold transition duration-200"
            >
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Retour au dashboard
            </a>
        </div>

        <!-- Titre de la page -->
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Ajouter les étapes d'une visite</h2>
            <p class="text-gray-600">Définissez le parcours détaillé de votre visite guidée</p>
        </div>

        <!-- Formulaire -->
        <div class="bg-white rounded-2xl shadow-xl p-8 border border-amber-100 max-w-4xl mx-auto">
            <form action="save-etapes.php" method="POST" class="space-y-8">
                
                <!-- Sélection de la visite -->
                <div class="bg-gradient-to-r from-green-50 to-green-100 border border-green-200 rounded-lg p-6">
                    <label for="visite_id" class="block text-sm font-medium text-gray-700 mb-3">
                        Sélectionnez une visite guidée <span class="text-red-500">*</span>
                    </label>
                    <select 
                        id="visite_id" 
                        name="visite_id"
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition duration-200 outline-none bg-white"
                    >
                        <option value="">-- Choisir une visite --</option>
                        <option value="1">Safari dans la Savane - 20 Jan 2025</option>
                        <option value="2">Découverte des Félins - 22 Jan 2025</option>
                        <option value="3">Les Géants d'Afrique - 25 Jan 2025</option>
                        <option value="4">Oiseaux Exotiques d'Afrique - 27 Jan 2025</option>
                    </select>
                </div>

                <!-- Section étapes -->
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-semibold text-gray-800">Étapes de la visite</h3>
                        <span class="text-sm text-gray-500">Remplissez au moins 3 étapes</span>
                    </div>

                    <div class="space-y-6">

                        <!-- Étape 1 -->
                        <div class="bg-gradient-to-r from-amber-50 to-amber-100 border-2 border-amber-300 rounded-xl p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-amber-600 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg mr-3">
                                    1
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800">Étape 1</h4>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <label for="etape1_titre" class="block text-sm font-medium text-gray-700 mb-2">
                                        Titre de l'étape <span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        id="etape1_titre" 
                                        name="etapes[1][titre]" 
                                        placeholder="Ex: Accueil et introduction"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200 outline-none bg-white"
                                    >
                                </div>

                                <div>
                                    <label for="etape1_description" class="block text-sm font-medium text-gray-700 mb-2">
                                        Description de l'étape <span class="text-red-500">*</span>
                                    </label>
                                    <textarea 
                                        id="etape1_description" 
                                        name="etapes[1][description]" 
                                        rows="3"
                                        placeholder="Décrivez ce qui se passe durant cette étape..."
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200 outline-none resize-none bg-white"
                                    ></textarea>
                                </div>

                                <input type="hidden" name="etapes[1][ordre]" value="1">
                            </div>
                        </div>

                        <!-- Étape 2 -->
                        <div class="bg-gradient-to-r from-green-50 to-green-100 border-2 border-green-300 rounded-xl p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-green-600 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg mr-3">
                                    2
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800">Étape 2</h4>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <label for="etape2_titre" class="block text-sm font-medium text-gray-700 mb-2">
                                        Titre de l'étape <span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        id="etape2_titre" 
                                        name="etapes[2][titre]" 
                                        placeholder="Ex: Zone des lions"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition duration-200 outline-none bg-white"
                                    >
                                </div>

                                <div>
                                    <label for="etape2_description" class="block text-sm font-medium text-gray-700 mb-2">
                                        Description de l'étape <span class="text-red-500">*</span>
                                    </label>
                                    <textarea 
                                        id="etape2_description" 
                                        name="etapes[2][description]" 
                                        rows="3"
                                        placeholder="Décrivez ce qui se passe durant cette étape..."
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition duration-200 outline-none resize-none bg-white"
                                    ></textarea>
                                </div>

                                <input type="hidden" name="etapes[2][ordre]" value="2">
                            </div>
                        </div>

                        <!-- Étape 3 -->
                        <div class="bg-gradient-to-r from-blue-50 to-blue-100 border-2 border-blue-300 rounded-xl p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg mr-3">
                                    3
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800">Étape 3</h4>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <label for="etape3_titre" class="block text-sm font-medium text-gray-700 mb-2">
                                        Titre de l'étape <span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        id="etape3_titre" 
                                        name="etapes[3][titre]" 
                                        placeholder="Ex: Espace herbivores"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 outline-none bg-white"
                                    >
                                </div>

                                <div>
                                    <label for="etape3_description" class="block text-sm font-medium text-gray-700 mb-2">
                                        Description de l'étape <span class="text-red-500">*</span>
                                    </label>
                                    <textarea 
                                        id="etape3_description" 
                                        name="etapes[3][description]" 
                                        rows="3"
                                        placeholder="Décrivez ce qui se passe durant cette étape..."
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 outline-none resize-none bg-white"
                                    ></textarea>
                                </div>

                                <input type="hidden" name="etapes[3][ordre]" value="3">
                            </div>
                        </div>

                        <!-- Étape 4 -->
                        <div class="bg-gradient-to-r from-purple-50 to-purple-100 border-2 border-purple-300 rounded-xl p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-purple-600 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg mr-3">
                                    4
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800">Étape 4</h4>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <label for="etape4_titre" class="block text-sm font-medium text-gray-700 mb-2">
                                        Titre de l'étape <span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        id="etape4_titre" 
                                        name="etapes[4][titre]" 
                                        placeholder="Ex: Point d'observation panoramique"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200 outline-none bg-white"
                                    >
                                </div>

                                <div>
                                    <label for="etape4_description" class="block text-sm font-medium text-gray-700 mb-2">
                                        Description de l'étape <span class="text-red-500">*</span>
                                    </label>
                                    <textarea 
                                        id="etape4_description" 
                                        name="etapes[4][description]" 
                                        rows="3"
                                        placeholder="Décrivez ce qui se passe durant cette étape..."
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200 outline-none resize-none bg-white"
                                    ></textarea>
                                </div>

                                <input type="hidden" name="etapes[4][ordre]" value="4">
                            </div>
                        </div>

                        <!-- Étape 5 -->
                        <div class="bg-gradient-to-r from-pink-50 to-pink-100 border-2 border-pink-300 rounded-xl p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-pink-600 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg mr-3">
                                    5
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800">Étape 5</h4>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <label for="etape5_titre" class="block text-sm font-medium text-gray-700 mb-2">
                                        Titre de l'étape <span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        id="etape5_titre" 
                                        name="etapes[5][titre]" 
                                        placeholder="Ex: Session questions-réponses"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent transition duration-200 outline-none bg-white"
                                    >
                                </div>

                                <div>
                                    <label for="etape5_description" class="block text-sm font-medium text-gray-700 mb-2">
                                        Description de l'étape <span class="text-red-500">*</span>
                                    </label>
                                    <textarea 
                                        id="etape5_description" 
                                        name="etapes[5][description]" 
                                        rows="3"
                                        placeholder="Décrivez ce qui se passe durant cette étape..."
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent transition duration-200 outline-none resize-none bg-white"
                                    ></textarea>
                                </div>

                                <input type="hidden" name="etapes[5][ordre]" value="5">
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Message informatif -->
                <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
                    <p class="text-sm text-amber-800 flex items-start">
                        <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                        </svg>
                        Les étapes seront affichées dans l'ordre numérique sur la page de détail de la visite. Assurez-vous que chaque étape est claire et détaillée.
                    </p>
                </div>

                <!-- Boutons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <button 
                        type="submit"
                        class="flex-1 bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white font-semibold py-3 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105"
                    >
                        Enregistrer les étapes
                    </button>
                    
                    <a 
                        href="dashboard.php"
                        class="flex-1 text-center bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-3 rounded-lg transition duration-200"
                    >
                        Annuler
                    </a>
                </div>

            </form>
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