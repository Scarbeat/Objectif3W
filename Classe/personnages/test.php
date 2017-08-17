<?php

require 'personnage.php';
require 'archer.php';
require 'tank.php';

$marcel = new Personnage('Marcel');

$franz = new Tank('Franz');

$legolas = new Archer('DarkLegoglas');


$legolas->attaque($franz);
$legolas->attaque($marcel);

$marcel->attaque($legolas);
$franz->attaque($marcel);

var_dump($marcel, $franz, $legolas);
