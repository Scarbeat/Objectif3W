<?php

class Document {
    public $auteur;
    public $titre;

    public function __construct($auteur, $titre) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        echo '<br>écrit par : '.$this->auteur;
        echo '<br>titre : '.$this->titre;
    }

}
