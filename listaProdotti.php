<?php
    require __DIR__.'/classes/Prodotti.php';

    require __DIR__.'/classes/Food.php';
    
    require __DIR__.'/classes/NonFood.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/prodotti.css">

    <title>Document</title>
</head>
<body>
    <header>
    <div class="top">
            <a class="btn" href="./index.php">Back</a>
        <h1>
            Lista prodotti
        </h1>
    </div>
    </header>

    <main>

        
            <h2>Prodotti Linea Food</h2>
        
        <!-- Dichiarazione di un oggetto -->
        <?php foreach ($food as $food){?>

            <div class="box">

                <h3>Brand: <?php echo $food->brand ?></h3>
    
                <h4>Prezzo: <?php echo $food -> getPrice(); ?> €</h4>
                
                <h4>Descrizione: <?php echo $food -> descrizione; ?> </h4>

            </div>
        

        <?php } ?>

        <h2>Prodotti linea Non Food</h2>
        <!-- Dichiarazione di un oggetto -->
        <?php foreach ($nonFood as $nonfood){?>

            <div class="box">

                <h3>Brand: <?php echo $nonfood->brand ?></h3>
    
                <h4>Prezzo: <?php echo $nonfood -> getPrice(); ?> €</h4>
                
                <h4>Descrizione: <?php echo $nonfood -> descrizione; ?> </h4>

            </div>
        

        <?php } ?>
    </main>


    
</body>
</html>