<?php

// require __DIR__.'/Prodotti.php';

    class NonFood extends Prodotti{
        public $reparto;

        //COSTRUTTORE
        function __construct($_brand, $_descrizione, $_codice, $_prezzo, $_sconto, $_reparto){
            parent::__construct($_brand, $_descrizione,$_codice, $_prezzo, $_sconto);
            
            $this->reparto = $_reparto;
        }
    }

    // OGGETTI
    $nonFood1 = new NonFood('Philips', 'Lampadina', 501, 4.99, 30, 'Elettronica' );
    $nonFood1 -> getPrice();

    $nonFood2 = new NonFood('Bassetti', 'Tovaglia', 601, 20.50, 23, 'Casalinghi' );
    $nonFood2 -> getPrice();

    $nonFood3 = new NonFood('Flora', 'Pianta da esterno', 801, 9.59, 12, 'Giardino' );
    $nonFood3 -> getPrice();

    $nonFood [] = $nonFood1;
    $nonFood [] = $nonFood2;
    $nonFood [] = $nonFood3;

    // var_dump($nonFood);