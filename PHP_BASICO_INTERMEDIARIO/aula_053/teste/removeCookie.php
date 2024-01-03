<?php 
    $nome = 'meu_cookie';
    setcookie($nome, '', time() - 1);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie removido</title>
</head>
<body>
    <?php require_once('./nav.php')?>
    <hr>
    <h1>Cookie removido com sucesso!</h1>
</body>
</html>