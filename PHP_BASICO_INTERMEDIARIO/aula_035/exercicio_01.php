<?php

    /*
        Usando como ponto de partida o array de produtos,
        apresenta no HTML uma Unordered List (ul) contendo
        todos os produtos do array
    */

    $produtos = ['arroz', 'batata', 'laranja'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>

    <?php 
    echo "<ul>";
        foreach ($produtos as $i => $produto) {
            echo "<li>". ucfirst($produto) ."</li>";
        }
    echo "</ul>";
    ?>

</body>
</html>