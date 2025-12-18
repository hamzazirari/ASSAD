<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zoo Virtuel ASSAD - Créer une visite guidée">
    <title>Créer une visite - Zoo Virtuel ASSAD</title>
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
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Créer une visite guidée</h2>
            <p class="text-gray-600">Remplissez les informations pour proposer une nouvelle visite</p>
        </div>

        <!-- Formulaire -->
        <div class="bg-white rounded-2xl shadow-xl p-8 border border-amber-100 max-w-3xl mx-auto">
            <form action="create-visite.php" method="POST" class="space-y-6">
                
                <!-- Titre de la visite -->
                <div>
                    <label for="titre" class="block text-sm font-medium text-gray-700 mb-2">
                        Titre de la visite <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="titre" 
                        name="titre" 
                        placeholder="Ex: Safari dans la Savane"
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition duration-200 outline-none"
                    >
                </div>


                <!-- Date et Heure -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <!-- Date -->
                    <div>
                        <label for="date" class="block text-sm font-medium text-gray-700 mb-2">
                            Date <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="date" 
                            id="date" 
                            name="date" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition duration-200 outline-none"
                        >
                    </div>

                    <!-- Heure de début -->
                    <div>
                        <label for="heure" class="block text-sm font-medium text-gray-700 mb-2">
                            Heure de début <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="time" 
                            id="heure" 
                            name="heure" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition duration-200 outline-none"
                        >
                    </div>

                </div>

                <!-- Durée et Prix -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                

                    <!-- Prix -->
                    <div>
                        <label for="prix" class="block text-sm font-medium text-gray-700 mb-2">
                            Prix (MAD) <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="number" 
                            id="prix" 
                            name="prix" 
                            min="0"
                            step="0.01"
                            placeholder="Ex: 150"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition duration-200 outline-none"
                        >
                    </div>

                </div>

                <!-- Langue et Capacité -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <!-- Langue -->
                    <div>
                        <label for="langue" class="block text-sm font-medium text-gray-700 mb-2">
                            Langue <span class="text-red-500">*</span>
                        </label>
                        <select 
                            id="langue" 
                            name="langue"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition duration-200 outline-none"
                        >
                            <option value="">Sélectionnez une langue</option>
                            <option value="francais">Français</option>
                            <option value="anglais">Anglais</option>
                            <option value="arabe">Arabe</option>
                            <option value="espagnol">Espagnol</option>
                        </select>
                    </div>

                    <!-- Capacité maximale -->
                    <div>
                        <label for="capacite" class="block text-sm font-medium text-gray-700 mb-2">
                            Capacité maximale <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="number" 
                            id="capacite" 
                            name="capacite" 
                            min="1"
                            max="50"
                            placeholder="Ex: 20"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition duration-200 outline-none"
                        >
                        <p class="text-xs text-gray-500 mt-1">Maximum 50 personnes</p>
                    </div>

                </div>

                <!-- Message informatif -->
                <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
                    <p class="text-sm text-amber-800 flex items-start">
                        <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                        </svg>
                        Assurez-vous que toutes les informations sont correctes avant de soumettre. Votre visite sera visible par tous les visiteurs après validation.
                    </p>
                </div>

                <!-- Boutons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <button 
                        type="submit"
                        class="flex-1 bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white font-semibold py-3 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105"
                    >
                        Créer la visite
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