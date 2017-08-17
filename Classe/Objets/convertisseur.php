<?php

interface iConvertisseur {
    public function Convert($devise, $montant);
}

class MonnaieConvertisseur implements iConvertisseur {

    private $taux = [
        'USD' => 1.1797,
        'CFA' => 657.43
    ];

    public function Convert($devise, $montant) {
        
    }
}
