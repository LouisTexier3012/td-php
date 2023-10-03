<?php
require_once 'ModeleVoiture.php'; // Inclure la classe ModeleVoiture
require_once 'ConnexionBaseDeDonnee.php'; // Inclure le fichier contenant la classe ConnexionBaseDeDonnee pour la connexion à la BDD

// Créez une instance de ModeleVoiture
$voiture = new ModeleVoiture("AB123CD", "Toyota", "Camry", "Rouge", 5);

// Appelez la méthode sauvegarder pour enregistrer la voiture dans la base de données
$voiture->sauvegarder();

echo "La voiture a été enregistrée avec succès dans la base de données.";
?>


