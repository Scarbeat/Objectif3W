<?php

require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World !');
$pdf->Output();



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

    function test(){
        var_dump(get_object_vars($this));
    }
}


$liste=[
    ['je','vais','au ciné'],
    ['il','assiste','à un match'],
    ['il','pleut','dehors'],
    ['ils','partent',' en vacances']
];


$doc = new Document();

for($i=0; $i<count($liste); $i++){
    $doc->addPhrase($liste[$i]);
}

$doc->affiche();
echo "<br><br>";
$doc->test();
