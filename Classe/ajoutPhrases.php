<?php

class Document {
    public $phrases=[];

    function addPhrase($phrase){
        $this->phrases[] = $phrase;
    }

    function affiche(){
        foreach ($this->phrases as $key => $value) {
            foreach ($value as $key => $donnee) {
                echo $donnee." ";
            }
            echo '<br>';
        }
    }
}


$liste=[
    ['je','vais','au ciné'],
    ['il','assiste','à un match'],
    ['il','pleut','dehors'],
];


$doc = new Document();

for($i=0; $i<count($liste); $i++){
    $doc->addPhrase($liste[$i]);
}

$doc->affiche();
