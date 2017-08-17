<?php

require 'document.php';

class Livre extends Document {
    private $editeur;


    public function __construct($editeur, $titre, $auteur) {
        $this->editeur = $editeur;
        echo '<br>edité par : '.$this->editeur;
        parent::__construct($titre, $auteur);
    }
}


$book = new Livre('FlemmeARien','Jean BranlPaHune','une vie de grêve');
