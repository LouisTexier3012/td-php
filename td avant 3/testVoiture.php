<?php

use Modele\ModeleVoiture;

require_once "Voiture.php";
$voiture1 = new ModeleVoiture("AB123CD","Tesla","model S", "rouge",5);
?>
<html>
<head>

</head>
<body>
<p>la voiture 1 c'est : <?= $voiture1->__toString()?></p>
</body>
</html>
