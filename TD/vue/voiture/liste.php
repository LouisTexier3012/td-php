<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des voitures</title>
</head>
<body>
<?php
/** @var Voiture[] $voitures */
foreach ($voitures as $voiture)
    echo "<br>".$voiture->__toString()." plus de detail "."<a href='https://webinfo.iutmontp.univ-montp2.fr/~texierl/td-php/TD/Controleur/routeur.php?action=afficherDetail&immat=".$voiture->getImmatriculation()."'>ici</a><br>";
?>
</body>
</html>
