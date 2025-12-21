<?php
require '../db.php';
require '../auth.php';

if ($_SESSION['user_role'] !== 'visiteur') {
    header("Location: /index.php");
    exit;
}

// Récupérer tous les animaux depuis la base de données
$query = "SELECT a.*, h.nom_hab 
          FROM animaux a 
          LEFT JOIN habitats h ON a.id_habitat = h.id_hab 
          ORDER BY a.nom";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zoo Virtuel ASSAD - Liste des animaux africains">
    <title>Nos Animaux - Zoo Virtuel ASSAD</title>
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
                        <a href="animaux.php" class="text-green-700 font-semibold hover:text-green-800 transition duration-200 border-b-2 border-green-700">
                            Animaux
                        </a>
                    </li>
                    <li>
                        <a href="visites.php" class="text-gray-600 hover:text-green-700 font-medium transition duration-200">
                            Visites guidées
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
        
        <!-- Titre de la page -->
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Nos Animaux</h2>
            <p class="text-gray-600">Découvrez la faune africaine de notre zoo virtuel</p>
        </div>

        <!-- Liste des animaux (Cards) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <?php
            // Afficher chaque animal
            while ($animal = mysqli_fetch_assoc($result)) {
                echo '<div class="bg-white rounded-xl shadow-lg overflow-hidden border border-amber-100 hover:shadow-xl transition duration-300">';
                
                // Image ou emoji
                echo '<div class="h-48 bg-gradient-to-br from-amber-200 to-yellow-300 flex items-center justify-center">';
                if ($animal['image']) {
                    echo '<img src="../uploads/' . htmlspecialchars($animal['image']) . '" alt="' . htmlspecialchars($animal['nom']) . '" class="w-full h-full object-cover">';
                } else {
                    echo '<span class="text-7xl">🦁</span>';
                }
                echo '</div>';
                
                // Informations
                echo '<div class="p-5">';
                echo '<h3 class="text-xl font-bold text-gray-800 mb-2">' . htmlspecialchars($animal['nom']) . '</h3>';
                echo '<p class="text-sm text-gray-600 mb-1"><span class="font-semibold">Espèce :</span> ' . htmlspecialchars($animal['espèce']) . '</p>';
                echo '<p class="text-sm text-gray-600 mb-1"><span class="font-semibold">Pays :</span> ' . htmlspecialchars($animal['paysorigine']) . '</p>';
                
                if ($animal['nom_hab']) {
                    echo '<p class="text-sm text-gray-600"><span class="font-semibold">Habitat :</span> ' . htmlspecialchars($animal['nom_hab']) . '</p>';
                }
                
                echo '</div>';
                echo '</div>';
            }
            
            // Si aucun animal
            if (mysqli_num_rows($result) == 0) {
                echo '<div class="col-span-3 text-center py-12">';
                echo '<p class="text-gray-500 text-lg">Aucun animal disponible pour le moment.</p>';
                echo '</div>';
            }
            ?>

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