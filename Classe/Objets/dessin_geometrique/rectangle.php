<?php

require_once('forme.php');

class Rectangle extends Forme {
    private $_width;
    private $_height;

    public function __construct($largeur, $hauteur, $donnees=['x'=>0,'y'=>0]) {
        parent::__construct($donnees);
        $this->_width = abs($largeur);
        $this->_width = abs($hauteur);
    }

    //get
    public function getWidth() {
        return $this->_width;
    }
    public function getHeight() {
        return $this->_height;
    }

    //set
    public function setWidth($_width) {
        $this->_width = abs($_width);
        return $this;
    }
    public function setHeight($_height) {
        $this->_height = abs($_height);
        return $this;
    }

    public function showInformation() {
        echo '<fieldset>
                <legend>' . get_class($this) . '</legend>
                <table>
                    <tr>
                        <td>Largueur<td>
                        <td>' . $this->getWidth() . '</td>
                    </tr>
                    <tr>
                        <td>Hauteur</td>
                        <td>' . $this->getHeight() . '</td>
                    </tr>
                    <tr>
                        <td>Aire<td>
                        <td>' . $this->area() . '</td>
                    </tr>
                    <tr>
                        <td>Ordonnée</td>
                        <td>' . $this->perimeter() . '</td>
                    </tr>
                </table>
            </fieldset>';
    }

    public function aire() {
        return $this->getWidth() * $this->getHeight();
    }

    public function perimetre() {
        return ($this->getWidth() + $this->getHeight()) * 2;
    }

}
