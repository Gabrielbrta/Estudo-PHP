<?php

$campo = $_POST['area_texto'];
unset($_POST['area_texto']);

function show_error() {
    global $campo;
    if(empty($campo)) {
        return "<p class='red'>O campo está vazio</p>";
    }
    else if(is_numeric($campo)) {
        file_put_contents("dados_numericos.txt", $campo . PHP_EOL, FILE_APPEND);
        return "<p class='green'>Valor numérico guardado com sucesso</p>";
    } else {
        file_put_contents("dados_string.txt", $campo . PHP_EOL, FILE_APPEND);
        return "<p class='green'>Valor string guardado com sucesso</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Nível 1 - Exercício 04</title>
</head>
<style>
    .red {
        color: red;
    }
    
    .green {
        color: green;
    }
</style>
<body>
    
    <form action="index.php" method="post">
        <input type="text" name="area_texto" id="texto">
        <button type="submit">Enviar</button>
        <?= show_error() ?>
    </form>

</body>
</html>