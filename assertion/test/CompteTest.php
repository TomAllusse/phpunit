<?php

use PHPUnit\Framework\TestCase;
use App\Entities\Compte;



class CompteTest extends TestCase {
    public function testRetraitOk(){
        $compte = new Compte();

        $compte->retirer(20);

        $this->assertEquals(80, $compte->getSolde());

        $this->assertStringContainsString("effectué", $compte->imprimerTicket());
    }

    public function testDecouvertInterdit(){
        $this->expectException(\Exception::class);

        $compte = new Compte();

        $compte->retirer(200);
    }

    public function testOperationSansRisque(){
        $this->expectNotToPerformAssertions();

        $compte = new Compte();

        $compte->retirer(1);
    }
}