<?php
    class Prodotti{
        // PROPRIETA'
        public $brand;
        public $descrizione;
        protected $prezzo;
        protected $codice;
        protected $sconto;

        //COSTRUTTORE
        function __construct($_brand, $_descrizione,$_codice, $_prezzo, $_sconto){
            $this->brand = $_brand;
            $this->descrizione = $_descrizione;
            $this->codice = $_codice;
            $this->prezzo = $_prezzo;
            $this->sconto = $_sconto;
        }

        //METODI
        public function getPrice(){
            $this->prezzo = $this->prezzo - ($this->prezzo * $this->sconto / 100);
            return $this -> prezzo;
        }

    }

  





   

    // var_dump($prod1);