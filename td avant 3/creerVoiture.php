<?php
require_once "Voiture.php";
$imat = $_POST["immatriculation"];
$marque = $_POST["marque"];
$model = $_POST ["model"];
$couleur = $_POST["couleur"];
$nbsiege = $_POST["nbsiege"];
$voiture = new ModeleVoiture($imat,$marque,$model,$couleur,$nbsiege);
echo $voiture->__toString();