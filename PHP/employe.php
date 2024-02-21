<?php

class Employe {
    private $nom;
    private $anciennete;
    private $salaireDeBase;

    public function __construct($nom, $anciennete, $salaireDeBase) {
        $this->nom = $nom;
        $this->anciennete = $anciennete;
        $this->salaireDeBase = $salaireDeBase;
    }

    public function getSalaire() {
        $primeAnciennete = $this->anciennete * 100; 
        $salaireTotal = $this->salaireDeBase + $primeAnciennete;
        return $salaireTotal;
    }

    // Getters et Setters
    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getAnciennete() {
        return $this->anciennete;
    }

    public function setAnciennete($anciennete) {
        $this->anciennete = $anciennete;
    }

    public function getSalaireDeBase() {
        return $this->salaireDeBase;
    }

    public function setSalaireDeBase($salaireDeBase) {
        $this->salaireDeBase = $salaireDeBase;
    }
}

// Programme de test
$employe = new Employe("Jean", 5, 2000);
echo "Le salaire de " . $employe->getNom() . " est : " . $employe->getSalaire() . " euros";

?>