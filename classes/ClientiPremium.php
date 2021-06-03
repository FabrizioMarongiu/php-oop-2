<?php

// require __DIR__.'/Clienti.php';

class ClientePremium extends Cliente{

    public $dataIscrizione;
    public $_codicePremium;

    function __construct($_nome, $_cognome, $_eta, $_documenti, $_dataIscrizione, $_codicePremium){
        parent::__construct($_nome, $_cognome, $_eta, $_documenti);
        $this->_dataIscrizione = $_dataIscrizione;
        $_codicePremium = $_codicePremium;
    }

    // METODI
    public function getDiscount(){
        parent::getDiscount();

        
           return $this->sconto = $this->sconto + 20; 
        
    }
}

$clientePremium1 = new ClientePremium('Fabrizio', 'Marongiu', '34', 'Patente', 'Gennaio', 101);


$clientePremium2 = new ClientePremium('Paolo', 'Lanterna', '54', 'ID', 'Aprile', 102);


$clientePremium3 = new ClientePremium('Lucrezia', 'Sessa', '25', 'ID', 'Agosto', 102);


$clientiPremium [] = $clientePremium1;
$clientiPremium [] = $clientePremium2;
$clientiPremium [] = $clientePremium3;

// var_dump($clientiPremium);
