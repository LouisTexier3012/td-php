<?php

use Modele\ModeleVoiture;

require_once "ModeleVoiture.php";
$imat = $_POST["immatriculation"];
$marque = $_POST["marque"];
$model = $_POST ["model"];
$couleur = $_POST["couleur"];
$nbsiege = $_POST["nbsiege"];
$voiture = new ModeleVoiture($imat,$marque,$model,$couleur,$nbsiege);
$voiture->sauvegarder();
echo $voiture->__toString();