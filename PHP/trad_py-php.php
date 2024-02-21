<?php
class identite{
    function __construct($nom,$prenom,$a){
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->a=$a;}

    function myst($b){
        return $b-$this->a;
    
    }

    }
    
$ld1= new identite("Hugo","Dupont","1999")
echo $ld1->myst(2020)

class employe{
    
    function __construct($nom,$prenom,$matricule,$anneeNaissance,$anneeEmbauche,$salaire){
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->matricule=$matricule;
    $this->anneeNaissance=$anneeNaissance;
    $this->anneeEmbauche=$anneeEmbauche;
    $this->salaire=$salaire;}

    if (2023-$anneeEmbauche)<5:
        $enciennete=$anneeEmbauche+1.02*$anneeEmbauche
}

?>