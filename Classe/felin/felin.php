<?php

interface iSon {
    public function emettreSon();
}

abstract class Felin {

    abstract protected function emettreSon();
}


class Personne implements iSon {

    public function emettreSon() {
        echo 'du sale mamène ! <br>';
    }
}

class Tigre extends Felin implements iSon {

    public function emettreSon() {
        echo 'vraou vraou ! <br>';
    }
}

class Chat extends Felin implements iSon {

    public function emettreSon() {
        echo 'miaou miaou ! <br>';
    }
}

$tigre = new Tigre();
$tigre->emettreSon();

$chat = new Chat();
$chat->emettreSon();

$personne = new Personne();
$personne->emettreSon();
