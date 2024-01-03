<?php 
    $valor = 'Não existe cookie';
    if(!empty($_COOKIE['meu_cookie'])){
        $valor = $_COOKIE['meu_cookie'];
    }  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <?php require_once('./nav.php')?>
    <hr>
    <h1><?= $valor ?></h1>
</body>
</html>