<!DOCTYPE html>
<html>
<head>
    <title>Liste des voitures</title>
</head>
<body>
<?php
/** @var Voiture[] $voitures */
foreach ($voitures as $voiture)
    echo "<br>".$voiture->__toString()." plus de detail "."<a href='https://webinfo.iutmontp.univ-montp2.fr/~texierl/td-php/TD/web/controleurFrontal.php?action=afficherDetail&immat=".rawurlencode($voiture->getImmatriculation())."'>ici</a><br>";
?>
<br>
<br>
</body>
</html>
