<?php 
    $nome = 'meu_cookie';
    $valor = 'Conteudo_do_cookie';
    $duracao = 3600;
    setcookie($nome, $valor, time() + $duracao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie adicionado</title>
</head>
<body>
    <?php require_once('./nav.php')?>
    <hr>
    <h1>Cookie adicionado com sucesso!</h1>
</body>
</html>