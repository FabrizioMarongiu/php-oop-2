<?php
    

    require __DIR__.'/classes/Clienti.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/clientiBasik.css">

    <title>Document</title>
</head>
<body>
    <main>
    <div class="top">
            <a class="btn" href="./index.php">Back</a>
            <h1>Lista clienti Basik</h1>
        </div>
        <?php foreach($clienti as $clientB) {?>
            <div class="box">
                
                <h2>Nome: <?php echo $clientB->getFullName()?></h2>
                
                <h2>Età: <?php echo $clientB->getAge() ?></h2>
                
                <h2>Scontistica applicabile: <?php echo $clientB->getDiscount() ?> %</h2>
                
            </div>

        <?php } ?>
    </main>
</body>
</html>