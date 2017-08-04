<?php

class Phrase {
    public $sujet;
    public $verbe;
    public $complement;


    function __construct($suj,$verb,$complt){
        $this->sujet=$suj;
        $this->verbe=$verb;
        $this->complement=$complt;
    }
    function affichePhrase(){
        echo $this->sujet.' '.$this->verbe.' '.$this->complement.'<br>';
    }
    function mettrePluriel(){
        if ($this->sujet == 'je'){
            $this->sujet = 'nous';
        }
        if ($this->sujet == 'nous'){
            $this->verbe = 'allons';
        }
    }

}


$phrase1=new Phrase('je','vais','au ciné');
$phrase1->affichePhrase();
$phrase1->mettrePluriel();
$phrase1->affichePhrase();

$phrase1=new Phrase('je','vais','au ciné');
$phrase1->affichePhrase();
