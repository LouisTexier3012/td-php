<?php
require_once 'Utilisateur.php'; // Inclure la classe Utilisateur
require_once 'Trajet.php'; // Inclure la classe Trajet
require_once 'ConnexionBaseDeDonnee.php'; // Inclure le fichier contenant la classe ConnexionBaseDeDonnee pour la connexion à la BDD
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Utilisateurs et Trajets</title>
</head>
<body>
    <h1>Liste des Utilisateurs</h1>
    <?php
    // Récupérez la liste des utilisateurs
    $utilisateurs = Utilisateur::getUtilisateurs();

    // Affichez la liste des utilisateurs
    foreach ($utilisateurs as $utilisateur) {
        echo $utilisateur;
    }
    ?>

    <h1>Liste des Trajets</h1>
    <?php
    // Récupérez la liste des trajets
    $trajets = Trajet::getTrajets();

    // Affichez la liste des trajets
    foreach ($trajets as $trajet) {
        echo $trajet;
    }
    ?>
</body>
</html>