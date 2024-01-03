<?php

    /* 
    Constrói uma apresentação em HTML que mostra a tabuáda dos 5.
    Exemplo:
    5 x 1 = 5
    5 x 2 = 10
    5 x 3 = 15
    ...
    5 x 10 = 50
    */

    $tabuada = 5;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada 5</title>
</head>
<body>
    <h1>Tabuada do <?= $tabuada ?></h1>
    <?php 
        for($i = 0; $i <= 10; $i++) {
            echo "$tabuada x $i = ". ($tabuada * $i) ."<br>" ;
        }
    ?>

</body>
</html>