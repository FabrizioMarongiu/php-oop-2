<?php
    

    require __DIR__.'/classes/Clienti.php';

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
        <?php foreach($clienti as $clientB) {?>
            <h2>Nome: <?php echo $clientB->nome ?></h2>
            <h2>Nome: <?php echo $clientB->cognome ?></h2>
            <h2>Nome: <?php echo $clientB->eta ?></h2>

        <?php } ?>
    </main>
</body>
</html>