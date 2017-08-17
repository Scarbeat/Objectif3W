<?php

$h = $_GET['h'];
$m = $_GET['m'];

header("Content-type: image/png");
// Paramètres : h et m

function rect($x1,$y1,$x2,$y2,$h)
{
  global $texte,$image;
  global $cclock,$sclock;
  $a = M_PI/2 - $h*M_PI/6;
  $c = cos($a);
  $s = sin($a);
  $points = array();
  $points[0] = 199 + (int) ($x1*$c - $y1*$s);
  $points[1] = 200 - (int) ($x1*$s + $y1*$c);
  $points[2] = 199 + (int) ($x2*$c - $y1*$s);
  $points[3] = 200 - (int) ($x2*$s + $y1*$c);
  $points[4] = 199 + (int) ($x2*$c - $y2*$s);
  $points[5] = 200 - (int) ($x2*$s + $y2*$c);
  $points[6] = 199 + (int) ($x1*$c - $y2*$s);
  $points[7] = 200 - (int) ($x1*$s + $y2*$c);

  imagefilledpolygon($image,$points,4,$texte);
}

function aiguille($h,$longueur)
{
  $x1 = 50; $y1 = -5;
  $x3 = 50; $y3 = 5;

  global $aiguilles,$image;
  global $cclock,$sclock;
  $a = M_PI/2 - $h*M_PI/6;
  $c = cos($a);
  $s = sin($a);
  $points = array();
  $points[0] = 199;
  $points[1] = 200;
  $points[2] = 199 + (int) ($x1*$c - $y1*$s);
  $points[3] = 200 - (int) ($x1*$s + $y1*$c);
  $points[4] = 199 + (int) ($longueur*$c);
  $points[5] = 200 - (int) ($longueur*$s);
  $points[6] = 199 + (int) ($x3*$c - $y3*$s);
  $points[7] = 200 - (int) ($x3*$s + $y3*$c);
  imagefilledpolygon($image,$points,4,$aiguilles);
}

$image = imagecreate(400,400);
$texte = imagecolorallocate($image,16,16,16);
$aiguilles = imagecolorallocate($image,128,128,128);
$fond = imagecolorallocate($image,255,255,255);
imagefilledrectangle($image,0,0,400,400,$fond);
imagearc($image,199,199,400,400,0,360,$texte);
imagearc($image,199,199,380,380,0,360,$texte);
imagefill($image,5,199,$texte);
imagearc($image,199,199,40,40,0,360,$aiguilles);
imagefill($image,199,199,$aiguilles);
imagefilledrectangle($image,194,0,204,40,$texte);
imagefilledrectangle($image,194,359,204,399,$texte);
imagefilledrectangle($image,0,194,40,204,$texte);
imagefilledrectangle($image,359,194,399,204,$texte);
rect(170,-1,200,5,1);
rect(170,-1,200,5,2);
rect(170,-1,200,5,4);
rect(170,-1,200,5,5);
rect(170,-1,200,5,7);
rect(170,-1,200,5,8);
rect(170,-1,200,5,10);
rect(170,-1,200,5,11);

aiguille(($h % 12)+$m/55,100);
aiguille((int)$m/5,180);
imagecolortransparent($image,$fond);
imagepng($image);

?>
