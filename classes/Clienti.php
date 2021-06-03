<?php

class Cliente{
    private $nome;
    private $cognome;
    private $eta;
    public $documenti;
    protected $sconto;

    function __construct($_nome, $_cognome, $_eta, $_documenti){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->eta = $_eta;
        $this->documenti = $_documenti;
    }

    // METODI
    public function getDiscount(){
        $this->sconto = $this->eta > 50 ? 10 : 0;
        return $this -> sconto;
    }

    public function getFullName(){
        return $this ->nome . ' ' . $this -> cognome;
    }
    public function getAge(){
        return $this ->eta;
    }




}


$cliente1 = new Cliente('Lola', 'Plex', 80, 'ID');


$cliente2 = new Cliente('Ravanello', 'Pallido', 68, 'ID');


$cliente3 = new Cliente('Edna', 'Caprapall', 47, 'Patente');


$clienti [] = $cliente1;
$clienti [] = $cliente2;
$clienti [] = $cliente3;

// var_dump($clienti);