<?php
require '../db.php';

// Récupérer l'ID
$id = $_GET['id'];

// Récupérer l'animal
$result = mysqli_query($conn, "SELECT * FROM animaux WHERE id = '$id'");
$animal = mysqli_fetch_assoc($result);

// Si on clique sur Modifier
if (isset($_POST['modifier'])) {
    
    $nom = $_POST['nom'];
    $espece = $_POST['espece'];
    $alimentation = $_POST['alimentation'];
    $pays = $_POST['pays'];
    $description = $_POST['description'];
    $habitat = $_POST['habitat'];
    
    // Gérer la photo
    $photo = $animal['image'];
    if ($_FILES['photo']['name']) {
        $photo = $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], '../uploads/' . $photo);
    }

    // Modifier dans la base
    $query = "UPDATE animaux 
              SET nom='$nom', `espèce`='$espece', alimentation='$alimentation', 
                  paysorigine='$pays', descriptioncourte='$description', 
                  id_habitat='$habitat', image='$photo' 
              WHERE id='$id'";
    
    mysqli_query($conn, $query);
    
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
    <title>Modifier animal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-6">

<h2 class="text-2xl font-bold text-green-800 mb-4">Modifier : <?php echo $animal['nom']; ?></h2>

<form method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow max-w-lg">
    
    <label class="block mb-2">Nom</label>
    <input type="text" name="nom" value="<?php echo $animal['nom']; ?>" required class="w-full mb-4 px-3 py-2 border rounded">

    <label class="block mb-2">Espèce</label>
    <input type="text" name="espece" value="<?php echo $animal['espèce']; ?>" required class="w-full mb-4 px-3 py-2 border rounded">

    <label class="block mb-2">Alimentation</label>
    <input type="text" name="alimentation" value="<?php echo $animal['alimentation']; ?>" class="w-full mb-4 px-3 py-2 border rounded">

    <label class="block mb-2">Pays</label>
    <input type="text" name="pays" value="<?php echo $animal['paysorigine']; ?>" required class="w-full mb-4 px-3 py-2 border rounded">

    <label class="block mb-2">Description</label>
    <textarea name="description" class="w-full mb-4 px-3 py-2 border rounded"><?php echo $animal['descriptioncourte']; ?></textarea>

    <label class="block mb-2">Habitat</label>
    <select name="habitat" required class="w-full mb-4 px-3 py-2 border rounded">
        <?php while($h = mysqli_fetch_assoc($habitats)): ?>
            <option value="<?php echo $h['id_hab']; ?>" <?php if($animal['id_habitat'] == $h['id_hab']) echo 'selected'; ?>>
                <?php echo $h['nom_hab']; ?>
            </option>
        <?php endwhile; ?>
    </select>

    <?php if($animal['image']): ?>
        <img src="../uploads/<?php echo $animal['image']; ?>" class="w-32 h-32 object-cover mb-2 rounded">
    <?php endif; ?>

    <label class="block mb-2">Nouvelle photo</label>
    <input type="file" name="photo" class="w-full mb-4 px-3 py-2 border rounded">

    <button type="submit" name="modifier" class="px-4 py-2 bg-blue-600 text-white rounded">Modifier</button>
    <a href="animaux.php" class="ml-3 px-4 py-2 bg-gray-300 rounded">Annuler</a>
</form>

</body>
</html>