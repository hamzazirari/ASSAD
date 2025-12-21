<?php
require '../db.php';

$id = $_GET['id'];

// Supprimer l'habitat (utiliser id_hab au lieu de id)
$query = "DELETE FROM habitats WHERE id_hab='$id'";
mysqli_query($conn, $query);

header("Location: habitats.php");
exit;
?>