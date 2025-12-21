<?php
require '../db.php';
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: ../index.php");
    exit;
}

if(isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $update = "UPDATE utilisateurs SET statut='actif' WHERE id_utilisateur=$id AND rôle='guide'";
    mysqli_query($conn, $update);
}

header("Location: utilisateurs.php");
exit;
?>
