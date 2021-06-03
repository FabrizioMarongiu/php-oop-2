<?php

class Cliente{
    public $nome;
    public $cognome;
    public $eta;
    public $documenti;
    public $sconto;

    function __construct($_nome, $_cognome, $_eta, $_documenti){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->eta = $_eta;
        $this->documenti = $_documenti;
    }

    // METODI
    public function getDiscount(){
        $this->sconto = $this->eta > 50 ? 10 : 0;
    }
}


$cliente1 = new Cliente('Lola', 'Plex', 80, 'ID');
$cliente1 -> getDiscount();

$cliente2 = new Cliente('Ravanello', 'Pallido', 68, 'ID');
$cliente2 -> getDiscount();

$cliente3 = new Cliente('Edna', 'Caprapall', 80, 'Patente');
$cliente3 -> getDiscount();

$clienti [] = $cliente1;
$clienti [] = $cliente2;
$clienti [] = $cliente3;

// var_dump($clienti);