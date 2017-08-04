<?php

class Voiture {
    private $kilometre;
    private $marque;
    private $modele;
    private $prix;
    private $couleur;

    function deplacement($km){
        $this->kilometre += $km;
        if ($this->kilometre >= 15000) {
            echo 'Vous avez atteinds '.$this->kilometre.'Km vous devez effectuer un entretien.<br>';
        }
    }
    function getkm(){
        return $this->kilometre;
    }
}


$car= new Voiture();


$car->deplacement(1200);
$car->deplacement(1200);
$car->deplacement(800);

echo 'Kilometres actuel : '.$car->getkm().' km<br>';

$car->deplacement(1200);
$car->deplacement(1200);
$car->deplacement(600);
$car->deplacement(1200);
$car->deplacement(758);
$car->deplacement(1200);
$car->deplacement(175);
$car->deplacement(1104);
$car->deplacement(487);
$car->deplacement(1200);
$car->deplacement(57);
$car->deplacement(75);
$car->deplacement(380);
$car->deplacement(671);
$car->deplacement(1458);
$car->deplacement(649);
$car->deplacement(834);
