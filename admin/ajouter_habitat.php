<?php
require '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $climat = $_POST['climat'];
    $description = $_POST['description'];
    $zone = $_POST['zone'];

    // Utiliser 'zonezoo' (le vrai nom de la colonne)
    $query = "INSERT INTO habitats (nom_hab, typeclimat, description, zonezoo) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $nom, $climat, $description, $zone);
    
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        header("Location: habitats.php");
        exit;
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un habitat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen p-6">

<h2 class="text-2xl font-bold text-green-800 mb-4">Ajouter un nouvel habitat</h2>

<form method="POST" class="bg-white p-6 rounded shadow w-full max-w-lg">
    <label class="block mb-2">Nom *</label>
    <input type="text" name="nom" required class="w-full mb-4 px-3 py-2 border rounded">

    <label class="block mb-2">Climat *</label>
    <select name="climat" required class="w-full mb-4 px-3 py-2 border rounded">
        <option value="">Sélectionner</option>
        <option value="tropical">Tropical</option>
        <option value="aride">Aride</option>
        <option value="tempéré">Tempéré</option>
        <option value="froid">Froid</option>
        <option value="humide">Humide</option>
        <option value="désertique">Désertique</option>
    </select>

    <label class="block mb-2">Description *</label>
    <textarea name="description" required class="w-full mb-4 px-3 py-2 border rounded"></textarea>

    <label class="block mb-2">Zone *</label>
    <select name="zone" required class="w-full mb-4 px-3 py-2 border rounded">
        <option value="">Sélectionner</option>
        <option value="A">Zone A</option>
        <option value="B">Zone B</option>
        <option value="C">Zone C</option>
        <option value="D">Zone D</option>
        <option value="E">Zone E</option>
        <option value="F">Zone F</option>
    </select>

    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Ajouter</button>
    <a href="habitats.php" class="ml-3 px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Annuler</a>
</form>

</body>
</html>