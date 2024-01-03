<?php

    /* 
    Dada a coleção de nomes, devem ser todos apresentados,
    mas a partir de maria (inclusive) devem ser com texto a vermelho
    */

    $nomes = ['joao', 'ana', 'carlos', 'marco', 'maria', 'silvia', 'helena', 'ricardo'];
    // $nomesSlice = array_slice($nomes, 4);
    $css = '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .vermelho {
            color: red;
        }
    </style>
</head>
<body>
    
    <?php foreach($nomes as $nome):?>
    <?php if($nome == 'maria') $css = 'vermelho'?>
    <p class="<?= $css ?>"><?= ucfirst($nome) ?></p>
    <?php endforeach; ?>

</body>
</html>