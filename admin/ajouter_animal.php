<?php
require '../db.php';

// Si on clique sur le bouton Ajouter
if (isset($_POST['ajouter'])) {
    
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $espece = $_POST['espece'];
    $alimentation = $_POST['alimentation'];
    $pays = $_POST['pays'];
    $description = $_POST['description'];
    $habitat = $_POST['habitat'];
    
    // Gérer la photo
    $photo = '';
    if ($_FILES['photo']['name']) {
        $photo = $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], '../uploads/' . $photo);
    }

    // Ajouter dans la base de données
    $query = "INSERT INTO animaux (nom, `espèce`, alimentation, paysorigine, descriptioncourte, id_habitat, image) 
              VALUES ('$nom', '$espece', '$alimentation', '$pays', '$description', '$habitat', '$photo')";
    
    mysqli_query($conn, $query);
    
    // Retourner à la liste
    header('Location: animaux.php');
    exit;
}

// Récupérer les habitats
$habitats = mysqli_query($conn, "SELECT * FROM habitats");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un animal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-6">

<h2 class="text-2xl font-bold text-green-800 mb-4">Ajouter un animal</h2>

<form method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow max-w-lg">
    
    <label class="block mb-2">Nom</label>
    <input type="text" name="nom" required class="w-full mb-4 px-3 py-2 border rounded">

    <label class="block mb-2">Espèce</label>
    <input type="text" name="espece" required class="w-full mb-4 px-3 py-2 border rounded">

    <label class="block mb-2">Alimentation</label>
    <input type="text" name="alimentation" class="w-full mb-4 px-3 py-2 border rounded">

    <label class="block mb-2">Pays d'origine</label>
    <input type="text" name="pays" required class="w-full mb-4 px-3 py-2 border rounded">

    <label class="block mb-2">Description</label>
    <textarea name="description" class="w-full mb-4 px-3 py-2 border rounded"></textarea>

    <label class="block mb-2">Habitat</label>
    <select name="habitat" required class="w-full mb-4 px-3 py-2 border rounded">
        <option value="">Choisir</option>
        <?php while($h = mysqli_fetch_assoc($habitats)): ?>
            <option value="<?php echo $h['id_hab']; ?>"><?php echo $h['nom_hab']; ?></option>
        <?php endwhile; ?>
    </select>

    <label class="block mb-2">Photo</label>
    <input type="file" name="photo" class="w-full mb-4 px-3 py-2 border rounded">

    <button type="submit" name="ajouter" class="px-4 py-2 bg-green-600 text-white rounded">Ajouter</button>
    <a href="animaux.php" class="ml-3 px-4 py-2 bg-gray-300 rounded">Annuler</a>
</form>

</body>
</html>