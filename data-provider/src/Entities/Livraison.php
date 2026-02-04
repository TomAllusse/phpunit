<?php

namespace App\Entities;

use Exception;

class Livraison {
    public function getFrais($montant) {
        if ($montant >= 50) {
            return 0;
        }
        return 4.99;
    }
}