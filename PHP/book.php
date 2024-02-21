<?php

class Book {
    public $titre;
    public $auteur;
    public $prix;

    public function __construct($titre, $auteur, $prix) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;
    }

    public function view() {
        echo "Titre : ". $this->titre."\n";
        echo "Auteur : ". $this->auteur."\n";
        echo "Prix : $ ". $this->prix."\n";
    }
}

// Programme de test
$livre = new Book("Marius", "Marius", 30);
$livre->view();

?>