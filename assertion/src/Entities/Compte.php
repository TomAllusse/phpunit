<?php

namespace App\Entities;

use Exception;

class Compte {
    private $solde;

    public function __construct()
    {
        $this->solde = 100;
    }

    public function getSolde()
    {
        return $this->solde;
    }

    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    public function retirer($montant)
    {
        if($this->solde < $montant){
            throw new Exception("Solde insuffisant !");
        }

        $this->solde -= $montant;
    }

    public function imprimerTicket()
    {
        return "Retrait effectué. Il vous reste ". $this->solde ." euros";
    }
}