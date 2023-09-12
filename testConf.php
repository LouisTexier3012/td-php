<?php
// On inclut les fichiers de classe PHP pour pouvoir se servir de la classe Conf.
// require_once évite que Conf.php soit inclus plusieurs fois,
// et donc que la classe Conf soit déclaré plus d'une fois.
require_once 'conf/Conf.php';

// On affiche le login de la base de donnees
echo Conf::getLogin();
?>