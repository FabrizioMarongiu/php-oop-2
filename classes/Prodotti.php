<?php
    class Prodotti{
        // PROPRIETA'
        public $nome;
        public $descrizione;
        protected $prezzo;
        protected $codice;
        protected $sconto;

        //COSTRUTTORE
        function __construct($_nome, $_descrizione,$_codice, $_prezzo, $_sconto){
            $this->nome = $_nome;
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