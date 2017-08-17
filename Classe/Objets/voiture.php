<?php

class VoitureMoteur {
    protected $kilometre;
    protected $marque;
    protected $modele;
    protected $prix;
    protected $couleur;

    // public function __construct($marque) {
    //     $this->marque = $marque;
    // }

    function deplacement($km) {
        $this->kilometre += $km;
        echo "J'avance <br>";
        if ($this->kilometre >= 15000) {
            echo 'Vous avez atteinds '.$this->kilometre.'Km vous devez effectuer un entretien.<br>';
        }
    }

    function getKm() {
        return $this->kilometre;
    }

    function setMarque($mrq) {
        $this->marque = $mrq;
    }

    function setModele($mdl) {
        $this->modele = $mdl;
    }

    function setCouleur($coul) {
        $this->couleur = $coul;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function doubler(Voiture $autre) {
        echo "La ".$this->modele." double la ".$autre->marque;
    }
    function __destruct() {
        echo "Véhicule détruit \n";
    }
}


class Voiture extends VoitureMoteur {
    private $vitesse = 0;
    private $rapport = 0;

    function setVit($vit) {
        $this->vitesse = $vit;
    }

    function passerVitesse() {
        $this->vitesse += 150;
        $this->rapport += 1;
        echo "Je passe la vitesse n°".$this->rapport."<br>";
    }

    function avance() {
        parent::deplacement($this->vitesse);
    }
}


$car1 = new Voiture('pijot');

$carA = &$car1;
$car1->__destruct();
$car2 = new Voiture('béhème');
xdebug_debug_zval('carA');
$car1->passerVitesse();
$car1->avance();
$car1->deplacement(150);

$car1->doubler($car2);
