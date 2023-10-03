<?php
require_once 'Trajet.php'; // Inclure la classe Trajet
require_once 'Utilisateur.php'; // Inclure la classe Utilisateur
require_once 'ConnexionBaseDeDonnee.php'; // Inclure le fichier contenant la classe ConnexionBaseDeDonnee pour la connexion à la BDD
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Passagers</title>
</head>
<body>
<h1>Liste des Passagers d'un Trajet</h1>

<?php
// Vérifiez si l'identifiant de trajet a été soumis dans le formulaire
if (isset($_GET['idTrajet'])) {
    $idTrajet = intval($_GET['idTrajet']); // Convertissez l'identifiant en entier

    // Utilisez la fonction getPassagers pour obtenir la liste des passagers
    $passagers = Trajet::getPassagers($idTrajet);

    // Affichez la liste des passagers
    if (!empty($passagers)) {
        foreach ($passagers as $passager) {
            echo $passager;
        }
    } else {
        echo "Aucun passager trouvé pour l'identifiant de trajet : $idTrajet";
    }
}
?>
</body>
</html>

