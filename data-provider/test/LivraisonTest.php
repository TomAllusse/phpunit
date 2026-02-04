<?php

use PHPUnit\Framework\TestCase;
use App\Entities\Livraison;
use PHPUnit\Framework\Attributes\DataProvider;



class LivraisonTest extends TestCase {
    public static function fournisseurFrais(){
        return [
            [20, 4.99],
            [49.99, 4.99],
            [50, 0],
            [100, 0],
        ];
    }

    #[DataProvider('fournisseurFrais')]
    public function testCalculFrais($montant, $fraisAttendus){
        $livraison = new Livraison();
        $frais = $livraison->getFrais($montant);
        $this->assertEquals($fraisAttendus, $frais);
    }
}