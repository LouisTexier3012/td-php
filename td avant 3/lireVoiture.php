<?php
// Incluez le fichier contenant la classe ModeleVoiture
require_once 'Voiture.php';

// Récupérez toutes les voitures depuis la base de données
$voitures = ModeleVoiture::getVoitures();

// Utilisez une boucle foreach pour afficher toutes les voitures
foreach ($voitures as $voiture) {
    // Afficher la voiture en utilisant la méthode adéquate de ModeleVoiture
    echo $voiture->__toString();
}
?>



