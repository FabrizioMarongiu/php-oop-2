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
    <title>Document</title>
</head>
<body>
    <header>
        <h1>
            Shop
        </h1>
    </header>

    <main>

        <h2>Prodotti linea Food</h2>
        <!-- Dichiarazione di un oggetto -->
        <?php foreach ($food as $food){?>
        
            <h3>Brand: <?php echo $food->brand ?></h3>

            <h4>Prezzo: <?php echo $food -> getPrice(); ?> €</h4>
            
            <h4>Descrizione: <?php echo $food -> descrizione; ?> </h4>

        <?php } ?>

        <h2>Prodotti linea Non Food</h2>
        <!-- Dichiarazione di un oggetto -->
        <?php foreach ($nonFood as $nonfood){?>
        
            <h3>Brand: <?php echo $nonfood->brand ?></h3>

            <h4>Prezzo: <?php echo $nonfood -> getPrice(); ?> €</h4>
            
            <h4>Descrizione: <?php echo $nonfood -> descrizione; ?> </h4>

        <?php } ?>
    </main>


    
</body>
</html>