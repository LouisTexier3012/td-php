<?php
require_once ('../Modele/ModeleVoiture.php'); // chargement du modèle
class ControleurVoiture {
    // Déclaration de type de retour void : la fonction ne retourne pas de valeur
    public static function afficherListe() : void {
        $voitures = ModeleVoiture::getVoitures(); //appel au modèle pour gérer la BD
        require ('../vue/voiture/liste.php');  //"redirige" vers la vue
    }

    public static function afficherDetail() : void {
        $voiture = ModeleVoiture::getVoitureParImmatriculation($_GET['immat']); //appel au modèle pour gérer la BD
        if ($voiture==null){
            $error = "problème avec la voiture d'immatriculation ".$_GET['immat']." immatriculation inexistante dans la base";
            require ('../vue/erreur.php');
        }else {
            require('../vue/voiture/detail.php');  //"redirige" vers la vue
        }
    }
}
?>
