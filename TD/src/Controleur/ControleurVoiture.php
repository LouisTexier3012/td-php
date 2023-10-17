<?php

namespace App\Covoiturage\Controleur;

use  App\Covoiturage\Modele\ModeleVoiture;

require_once __DIR__.'/../Modele/ModeleVoiture.php'; // chargement du modèle
class ControleurVoiture
{

    private static function afficherVue(string $cheminVue, array $parametres = []): void
    {
        extract($parametres); // Crée des variables à partir du tableau $parametres
        require __DIR__."/../vue/vue.php"; // Charge la vue
    }


    // Déclaration de type de retour void : la fonction ne retourne pas de valeur
    public static function afficherListe(): void
    {
        $voitures = ModeleVoiture::getVoitures(); //appel au modèle pour gérer la BD
        ControleurVoiture::afficherVue('voiture/liste.php', [
            "voitures" => $voitures
        ]);
    }

    public static function afficherDetail(): void
    {
        $voiture = ModeleVoiture::getVoitureParImmatriculation($_GET['immat']); //appel au modèle pour gérer la BD
        if ($voiture == null) {
            $error = "problème avec la voiture d'immatriculation " . $_GET['immat'] . " immatriculation inexistante dans la base";
            ControleurVoiture::afficherVue('voiture/formulaireCreation.php', [
                "error" => $error,
            ]);
        } else {
            ControleurVoiture::afficherVue('voiture/detail.php', [
                "voiture" => $voiture
            ]);
        }
    }

    public static function afficherFormulaireCreation(): void
    {
        ControleurVoiture::afficherVue('voiture/formulaireCreation.php', []);
    }

    public static function creerDepuisFormulaire(): void
    {
        $imat = $_POST["immatriculation"];
        $marque = $_POST["marque"];
        $model = $_POST ["model"];
        $couleur = $_POST["couleur"];
        $nbsiege = $_POST["nbsiege"];
        $voiture = new ModeleVoiture($imat, $marque, $model, $couleur, $nbsiege);
        $voiture->sauvegarder();
        ControleurVoiture::afficherVue('voiture/detail.php', [
            "voiture" => $voiture
        ]);
    }
}

?>
