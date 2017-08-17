<?php

$dossier = '../Objets';
$liste = 'recup.txt';
$ressources = opendir($dossier);

while (($actuel = readdir($ressources)) !== FALSE) {
    if ($actuel == "." or $actuel == "..") {
        continue;
    } else {
        $fichier = fopen("$dossier/$actuel", 'r');
        $contenu = fread($fichier, filesize("$dossier/$actuel"));
        $conteneur = fopen($liste,'a+');
        fwrite($conteneur, $contenu);
    }
}
closedir();
