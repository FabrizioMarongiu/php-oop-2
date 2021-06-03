<?php
    

    require __DIR__.'/classes/Clienti.php';
    
    require __DIR__.'/classes/ClientiPremium.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/clientiPremium.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="top">
            <a class="btn" href="./index.php">Back</a>
            <h1>Lista clienti Premium</h1>
        </div>
        <?php foreach($clientiPremium as $clientP) {?>
            <div class="box">

                <h2>Nome: <?php echo $clientP->getFullName() ?></h2>
                
                <h2>Età: <?php echo $clientP->getAge() ?></h2>
    
                <h2>Scontistica applicata: <?php echo $clientP -> getDiscount()?> %</h2>
    
                <h2>Codice Premium: <?php echo $clientP -> codicePremium?></h2>

            </div>

        <?php } ?>
    </main>
</body>
</html>