<?php
    require_once 'conf/Conf.php';

class Model {
    private static $instance = null;

    private PDO $pdo;

    public static function getPdo(): PDO {
        return Model::getInstance()->pdo;
    }

    private function __construct () {
        // Connexion à la base de données
        // Le dernier argument sert à ce que toutes les chaines de caractères
        // en entrée et sortie de MySql soit dans le codage UTF-8
        $this->pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$databaseName", $login, $password,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        // On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // getInstance s'assure que le constructeur ne sera
    // appelé qu'une seule fois.
    // L'unique instance crée est stockée dans l'attribut $instance
    private static function getInstance() : Model {
        // L'attribut statique $pdo s'obtient avec la syntaxe Model::$pdo
        // au lieu de $this->pdo pour un attribut non statique
        if (is_null(Model::$instance))
            // Appel du constructeur
            Model::$instance = new Model();
        return Model::$instance;
    }
}


