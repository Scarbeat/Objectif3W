<?php
class Tank extends Personnage {

    public function __construct($nom){
        $this->vie = $this->vie * 1.5;
        parent::__construct($nom);
    }

    public function attaque($cible){
        $cible->vie -= $this->atk * 0.75 ;
        parent::attaque($cible);
    }

}
