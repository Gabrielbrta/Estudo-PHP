<?php

    /* 
    1. Constrói um array com todos os resultados da tabuáda dos 327.
    2. Apresenta os dados do array com um ciclo foreach (apenas os valores)
    */

    $results = [];
    for($i = 0; $i <= 10; $i++) {
        $resultados = $i * 327;
        array_push($results, $resultados);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado tabuada 327</title>
</head>
<body>
    
<?php 
    foreach ($results as $valor) {
        echo "$valor <br>";
    };
?>
    

</body>
</html>