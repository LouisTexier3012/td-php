<?php
class Voiture {

    private string $immatriculation;
    private string $marque;
    private string $model;
    private string $couleur;
    private int $nbSieges; // Nombre de places assises

    // un getter
    public function getMarque() {
        return $this->marque;
    }

    // un setter
    public function setMarque(string $marque) {
        $this->marque = $marque;
    }

    // un constructeur
    public function __construct(
        string $immatriculation,
        string $marque,
        ?string $model,
        ?string $couleur,
        ?int $nbSieges
    ) {
        $this->immatriculation = substr($immatriculation,0,8);;
        $this->marque = $marque;
        $this->model=$model;
        $this->couleur = $couleur;
        $this->nbSieges = $nbSieges;
    }

    // Pour pouvoir convertir un objet en chaîne de caractères
    public function __toString() {
        $voiture = '<div id="desc" style="display: flex;">voiture d\'immatriculation '.$this->immatriculation." est une ".$this->marque;
        if ($this->model!=null){
            $voiture.= " ".$this->model;
        }
        if ($this->couleur!=null){
            $voiture .= ' de couleur <div id="color" style="margin-left: 3px;width: 20px; height: 20px;background-color:'.$this->couleur.';"></div>';
        }if ($this->nbSieges != 0 && $this->nbSieges != null){
            $voiture .= ", elle a ".$this->nbSieges." sieges.";
        }
        $voiture .= "</div>";
        return $voiture;
    }

    public static function construireDepuisTableau(array $voitureFormatTableau): ModeleVoiture {
        // Créez une instance de ModeleVoiture à partir du tableau
        return new ModeleVoiture($voitureFormatTableau['marque'], $voitureFormatTableau['model'], $voitureFormatTableau['couleur'], $voitureFormatTableau['immatriculation'], $voitureFormatTableau['nbSieges']);
    }

    public static function getVoitures(): array {
        // Incluez le fichier contenant la classe ConnexionBaseDeDonnee pour se connecter à la BDD
        require_once 'Model.php';

        // Obtenez une instance PDO à partir de la classe ConnexionBaseDeDonnee
        $pdo = ConnexionBaseDeDonnee::getPdo();

        // Requête SQL pour récupérer toutes les voitures de la base de données
        $sql = "SELECT * FROM voitures";

        // Exécutez la requête SQL
        $pdoStatement = $pdo->query($sql);

        $voitures = array();

        // Vérifiez si la requête a réussi
        if ($pdoStatement) {
            // Utilisez une boucle foreach pour parcourir toutes les voitures
            foreach ($pdoStatement as $voitureFormatTableau) {
                // Utilisez la méthode construireDepuisTableau pour créer l'objet ModeleVoiture
                $voiture = self::construireDepuisTableau($voitureFormatTableau);

                // Ajoutez la voiture au tableau des voitures
                $voitures[] = $voiture;
            }
        } else {
            echo "Erreur lors de l'exécution de la requête SQL.";
        }

        return $voitures;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel(string $model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * @param mixed $immatriculation
     */
    public function setImmatriculation(string $immatriculation)
    {
        $this->immatriculation = substr($immatriculation,0,8);
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur(string $couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getNbSieges()
    {
        return $this->nbSieges;
    }

    /**
     * @param mixed $nbSieges
     */
    public function setNbSieges(int $nbSieges)
    {
        $this->nbSieges = $nbSieges;
    }

}
?>