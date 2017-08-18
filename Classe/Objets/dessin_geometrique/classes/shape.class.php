<?php

abstract class Forme {
    private $_x;
    private $_y;


    public function __construct($donnees=['x'=>0,'y'=>0]) {
        $this->_x = $donnees['x'];
        $this->_y = $donnees['y'];
    }

    public function getX() {
        return $this->_x;
    }
    public function getY() {
        return $this->_y;
    }

    public function showInformation() {
        echo '<fieldset>
                <legend>' . get_class() . '</legend>
                <table>
                    <tr>
                        <td>Abscisse<td>
                        <td>' . $this->getX() . '</td>
                    </tr>
                    <tr>
                        <td>Ordonnée</td>
                        <td>' . $this->getY() . '</td>
                    </tr>
                </table>
            </fieldset>';
    }

    abstract public function aire();
    abstract public function perimetre();
}
