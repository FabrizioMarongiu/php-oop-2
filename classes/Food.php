<?php

// require __DIR__.'/Prodotti.php';

  class Food extends Prodotti{
        public $categoria;
       
        //COSTRUTTORE
        function __construct($_nome, $_descrizione,$_codice, $_prezzo, $_sconto, $_categoria){
            parent::__construct($_nome, $_descrizione,$_codice, $_prezzo, $_sconto);
            
            $this->categoria = $_categoria;
        }
    }

 // OGGETTI

 $food1 = new Food('Pasta','Pasta di semola di grano duro',001, 1.00, 20, 'Scaffale');


 $food2 = new Food('Pizza', 'Pizza margherita surgelata', 101, 2.50, 10, 'Surgelati' );


 $food3 = new Food('Crudo Parma', 'Prosciutto crudo di Parma', 201, 2.49, 15, 'Salumeria');

 $food[] = $food1;
 $food[] = $food2;
 $food[] = $food3;

//  foreach ($array as $cibo){
//      var_dump($cibo);
//  }