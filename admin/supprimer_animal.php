<?php
require '../db.php';

// Récupérer l'ID
$id = $_GET['id'];

// Supprimer l'animal
mysqli_query($conn, "DELETE FROM animaux WHERE id = '$id'");

// Retourner à la liste
header("Location: animaux.php");
exit;
?>