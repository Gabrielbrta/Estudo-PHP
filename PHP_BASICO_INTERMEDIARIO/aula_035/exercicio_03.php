<?php

    /*
        Ordena por ordem alfabética os produtos do array e apresenta
        os dados numa ul
    */

    $produtos = ['laranja', 'arroz', 'batata', 'feijão', 'castanha'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    
    <?php 
        sort($produtos);
    echo "<ul>";
        foreach($produtos as $i => $produto) {
            echo "<li>". ucfirst($produto) ."</li>";   
        }
    echo "</ul>";
    ?>

</body>
</html>