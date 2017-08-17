<?php
class Voiture {

    public function avance($distance) {
        echo "on avance de : $distance <br>";
        return $this;
    }

    public function stop() {
        echo "stop ! <br>";
        return $this;
    }

    public function demiTour() {
        echo "demi tour <br>";
        return $this;
    }
}


$voiture = new Voiture;
$voiture->avance(100)->stop()->demiTour();
