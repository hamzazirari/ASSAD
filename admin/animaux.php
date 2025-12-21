<?php
require '../db.php';
require '../auth.php';

if ($_SESSION['user_role'] !== 'admin') {
    header("Location: /index.php");
    exit;
}

$query = "SELECT a.*, h.nom_hab FROM animaux a LEFT JOIN habitats h ON a.id_habitat = h.id_hab";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Animaux - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">

<header class="bg-white shadow p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold text-green-800">Zoo Virtuel - Gestion des Animaux</h1>
    <a href="../logout.php" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">Déconnexion</a>
</header>

<main class="container mx-auto px-4 py-6">

    <h2 class="text-2xl font-bold text-green-800 mb-4">Liste des animaux</h2>

    <a href="ajouter_animal.php" class="mb-4 inline-block px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
        ➕ Ajouter un animal
    </a>

    <div class="bg-white shadow rounded-lg overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4">Nom</th>
                    <th class="py-2 px-4">Espèce</th>
                    <th class="py-2 px-4">Pays</th>
                    <th class="py-2 px-4">Habitat</th>
                    <th class="py-2 px-4">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
<?php
while($animal = mysqli_fetch_assoc($result)) {
    echo '<tr class="hover:bg-gray-50">';
    echo '<td class="py-2 px-4">' . htmlspecialchars($animal['nom']) . '</td>';
    echo '<td class="py-2 px-4">' . htmlspecialchars($animal['espèce']) . '</td>';
    echo '<td class="py-2 px-4">' . htmlspecialchars($animal['paysorigine']) . '</td>';
    echo '<td class="py-2 px-4">' . htmlspecialchars($animal['nom_hab']) . '</td>';
    echo '<td class="py-2 px-4">';
    echo '<a href="modifier_animal.php?id=' . $animal['id'] . '" class="px-2 py-1 bg-blue-100 text-blue-700 rounded hover:bg-blue-200 text-xs">Modifier</a> ';
    echo '<a href="supprimer_animal.php?id=' . $animal['id'] . '" class="px-2 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs" onclick="return confirm(\'Voulez-vous vraiment supprimer cet animal ?\');">Supprimer</a>';
    echo '</td>';
    echo '</tr>';
}
?>
            </tbody>
        </table>
    </div>

</main>

</body>
</html>