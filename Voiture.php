<?php
class Voiture {

    private $immatriculation;
    private $marque;
    private $couleur;
    private $nbSieges; // Nombre de places assises

    // un getter
    public function getMarque() {
        return $this->marque;
    }

    // un setter
    public function setMarque($marque) {
        $this->marque = $marque;
    }

    // un constructeur
    public function __construct(
        $immatriculation,
        $marque,
        $couleur,
        $nbSieges
    ) {
        $this->immatriculation = substr($immatriculation,0,8);;
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->nbSieges = $nbSieges;
    }

    // Pour pouvoir convertir un objet en chaîne de caractères
    public function __toString() {
        $voiture = "voiture d'immatriculation".$this->immatriculation;
        if ($this->couleur!=null){
            $voiture .= " de couleur ".$this->couleur;
        }if ($this->nbSieges != 0 && $this->nbSieges != null){
            $voiture .= ", elle a ".$this->nbSieges." sieges.";
        }
        return $voiture;
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
    public function setImmatriculation($immatriculation)
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
    public function setCouleur($couleur)
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
    public function setNbSieges($nbSieges)
    {
        $this->nbSieges = $nbSieges;
    }

}
?>