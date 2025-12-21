<?php
require '../db.php';

//  Récupérer l'ID de l'habitat à modifier
$id = $_GET['id'];

// Récupérer les informations de l'habitat depuis la base de données
$query = "SELECT * FROM habitats WHERE id_hab = '$id'";
$result = mysqli_query($conn, $query);
$habitat = mysqli_fetch_assoc($result);

//  Si le formulaire est soumis, mettre à jour l'habitat
if (isset($_POST['modifier'])) {
    
    $nom = $_POST['nom'];
    $climat = $_POST['climat'];
    $description = $_POST['description'];
    $zone = $_POST['zone'];

    // Mettre à jour dans la base de données
    $query = "UPDATE habitats 
              SET nom_hab='$nom', typeclimat='$climat', description='$description', zonezoo='$zone' 
              WHERE id_hab='$id'";
    
    mysqli_query($conn, $query);

    // Rediriger vers la liste des habitats
    header("Location: habitats.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier habitat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen p-6">

<h2 class="text-2xl font-bold text-green-800 mb-4">Modifier l'habitat</h2>

<form method="POST" class="bg-white p-6 rounded shadow w-full max-w-lg">
    
    <!-- Champ Nom -->
    <label class="block mb-2">Nom *</label>
    <input type="text" name="nom" value="<?php echo $habitat['nom_hab']; ?>" required class="w-full mb-4 px-3 py-2 border rounded">

    <!-- Champ Climat -->
    <label class="block mb-2">Climat *</label>
    <select name="climat" required class="w-full mb-4 px-3 py-2 border rounded">
        <option value="tropical" <?php if($habitat['typeclimat']=='tropical') echo 'selected'; ?>>Tropical</option>
        <option value="aride" <?php if($habitat['typeclimat']=='aride') echo 'selected'; ?>>Aride</option>
        <option value="tempéré" <?php if($habitat['typeclimat']=='tempéré') echo 'selected'; ?>>Tempéré</option>
        <option value="froid" <?php if($habitat['typeclimat']=='froid') echo 'selected'; ?>>Froid</option>
        <option value="humide" <?php if($habitat['typeclimat']=='humide') echo 'selected'; ?>>Humide</option>
        <option value="désertique" <?php if($habitat['typeclimat']=='désertique') echo 'selected'; ?>>Désertique</option>
    </select>

    <!-- Champ Description -->
    <label class="block mb-2">Description *</label>
    <textarea name="description" required class="w-full mb-4 px-3 py-2 border rounded"><?php echo $habitat['description']; ?></textarea>

    <!-- Champ Zone -->
    <label class="block mb-2">Zone *</label>
    <select name="zone" required class="w-full mb-4 px-3 py-2 border rounded">
        <option value="A" <?php if($habitat['zonezoo']=='A') echo 'selected'; ?>>Zone A</option>
        <option value="B" <?php if($habitat['zonezoo']=='B') echo 'selected'; ?>>Zone B</option>
        <option value="C" <?php if($habitat['zonezoo']=='C') echo 'selected'; ?>>Zone C</option>
        <option value="D" <?php if($habitat['zonezoo']=='D') echo 'selected'; ?>>Zone D</option>
        <option value="E" <?php if($habitat['zonezoo']=='E') echo 'selected'; ?>>Zone E</option>
        <option value="F" <?php if($habitat['zonezoo']=='F') echo 'selected'; ?>>Zone F</option>
    </select>

    <!-- Boutons -->
    <button type="submit" name="modifier" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">✅ Modifier</button>
    <a href="habitats.php" class="ml-3 px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">❌ Annuler</a>
</form>

</body>
</html>