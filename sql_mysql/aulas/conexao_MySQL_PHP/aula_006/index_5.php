<?php

// OBTER DADOS EM DIFERENTES FORMATOS

/*
Uma nota final sobre esta matéria.
Existem outras formas de indicar ao PDO como deve devolver
os resultados.
*/

$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = 'bieldahora321';

class Produto {
    public $id;
    public $produto;
    public $preco_unidade;

}

$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
$resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_CLASS, "Produto");

$ligacao = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>
    <?php if($resultados) :?>
    <?php if(count($resultados) !== 0):?>
        <?php foreach($resultados as $produto) : ?>
            <p><strong>Produto: <?= $produto->produto ?></strong></p>
            <p>Preço: <?= $produto->preco_unidade ?></p>
        <?php endforeach; ?>
    <?php else:?>
            <h1>O produto não existe!</h1>
    <?php endif; ?>
    <?php else:?>
            <h1>Ocorreu um erro na conexão com o banco de dados</h1>
    <?php endif; ?>
    </body>
</html>