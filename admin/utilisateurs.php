<?php
// utilisateurs.php
session_start();
require '../db.php';
require '../auth.php';

// Vérifier que l'utilisateur est admin
if ($_SESSION['user_role'] !== 'admin') {
    header("Location: /index.php");
    exit;
}

// Activer un guide si on reçoit un ID
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $update = "UPDATE utilisateurs SET statut='actif' WHERE id_utilisateur=$id AND rôle='guide'";
    mysqli_query($conn, $update);
    header("Location: utilisateurs.php");
    exit;
}

// Récupérer tous les utilisateurs
$query = "SELECT * FROM utilisateurs ORDER BY id_utilisateur DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Utilisateurs - Admin</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
        a.button { padding: 5px 10px; background-color: green; color: white; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>

<h2>Gestion des utilisateurs</h2>
<p><a href="admin-dashboard.php">← Retour au Dashboard</a></p>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Rôle</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while($user = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= htmlspecialchars($user['nom']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td><?= htmlspecialchars($user['rôle']) ?></td>
            <td><?= htmlspecialchars($user['statut']) ?></td>
            <td>
                <?php if($user['rôle'] === 'guide' && $user['statut'] !== 'actif') : ?>
                    <a href="utilisateurs.php?id=<?= $user['id_utilisateur'] ?>" class="button">Activer</a>
                <?php else : ?>
                    —
                <?php endif; ?>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

</body>
</html>
