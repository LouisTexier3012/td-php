<?php
require_once "Model.php";

$pdo = Model::getPdo();
$pdo->query("Select * from voiture");
$voitureFormatTableau = $pdo->fetch();

