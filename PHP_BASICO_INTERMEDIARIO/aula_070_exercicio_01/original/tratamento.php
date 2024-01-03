<?php

// lógica de tratamento do formulário
session_start();

if($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Ocorreu um erro!");
}

// verifico se os valores estão vazios
if(empty($_POST['text_valor_1']) || empty($_POST['text_valor_2'])) {
    $_SESSION['erro'] = "Todos os campos tem que estar preenchidos!";
    header("Location: index.php");
    return;
}

// verifico se os valores são positivos e numéricos.
$valor1 = $_POST['text_valor_1'];
$valor2 = $_POST['text_valor_2'];

if(!is_numeric($valor1) || !is_numeric($valor2) || $valor1 < 1 || $valor2 < 1){
    $_SESSION['erro'] = "Os valores precisam ser numéricos e positivos.";
    header("Location: index.php");
    return;
}

// retorno o valor da soma dos valores caso não exista erros.
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 
        echo "$valor1 x $valor2 = ". $valor1 * $valor2;
    ?>
</body>
</html>