<?php
interface ImageInterface {
    public function affichage();
}


//Image
class Image implements ImageInterface {
    private $fileName;
//construction complete de l'image
    public function __construct($fileName) {
        $this->fileName = $fileName;
        $this->chargement($fileName);
    }

    public function affichage()
    {
        echo "Affichage de l'image : {$this->fileName} <br>";
    }

    private function chargement($fileName) {
        echo "Chargement de l'image : $fileName <br>";
    }
}

//proxy de l'image
class ImageProxy implements ImageInterface {
    private $fileName;
    private $image;
//construction partielle de l'image
    public function __construct($fileName) {
        $this->fileName = $fileName;
    }
//appel de la construction complete de l'image si non instancié sinon affiche l'objet deja instancié
    public function affichage() {
        if (!$this->image) {
            $this->image = new image($this->fileName);
        }
        $this->image->affichage();
    }
}


$image = new ImageProxy('image.jpg');
$image->affichage();
$image->affichage();
