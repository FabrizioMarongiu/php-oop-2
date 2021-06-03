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
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Lista clienti Premium</h1>
        <?php foreach($clientiPremium as $clientP) {?>
            <h2>Nome: <?php echo $clientP->getFullName() ?></h2>
            
            <h2>Età: <?php echo $clientP->getAge() ?></h2>

            <h2>Scontistica applicata: <?php echo $clientP -> getDiscount()?> %</h2>

        <?php } ?>
    </main>
</body>
</html>