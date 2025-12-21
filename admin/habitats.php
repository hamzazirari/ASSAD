<?php
require '../db.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Habitats - Zoo Virtuel ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">

<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <h1 class="text-lg font-bold text-green-800">Zoo Virtuel ASSAD - Habitats</h1>
        <nav>
            <a href="admin-dashboard.php" class="px-3 py-1 text-gray-700 hover:text-green-700">Dashboard</a>
            <a href="animaux.php" class="px-3 py-1 text-gray-700 hover:text-green-700">Animaux</a>
            <a href="../logout.php" class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Déconnexion</a>
        </nav>
    </div>
</header>

<main class="container mx-auto px-4 py-6">

    <h2 class="text-2xl font-bold text-green-800 mb-4">Liste des habitats</h2>
    <a href="ajouter_habitat.php" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 mb-4 inline-block">
        ➕ Ajouter un habitat
    </a>

    <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 text-left">Nom</th>
                    <th class="py-2 px-4 text-left">Climat</th>
                    <th class="py-2 px-4 text-left">Description</th>
                    <th class="py-2 px-4 text-left">Zone</th>
                    <th class="py-2 px-4 text-left">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
<?php
$query = "SELECT * FROM habitats";
$result = mysqli_query($conn, $query);

while($habitat = mysqli_fetch_assoc($result)) {
    echo '<tr class="hover:bg-gray-50">';
    echo '<td class="py-2 px-4">'.htmlspecialchars($habitat['nom_hab']).'</td>';
    echo '<td class="py-2 px-4">'.htmlspecialchars($habitat['typeclimat']).'</td>';
    echo '<td class="py-2 px-4">'.htmlspecialchars($habitat['description']).'</td>';
    echo '<td class="py-2 px-4">'.htmlspecialchars($habitat['zonezoo']).'</td>';
    echo '<td class="py-2 px-4">';
    echo '<a href="modifier_habitat.php?id='.$habitat['id_hab'].'" class="px-2 py-1 text-xs bg-blue-100 text-blue-700 rounded hover:bg-blue-200 mr-1">Modifier</a>';
    echo '<a href="supprimer_habitat.php?id='.$habitat['id_hab'].'" class="px-2 py-1 text-xs bg-red-100 text-red-700 rounded hover:bg-red-200">Supprimer</a>';
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