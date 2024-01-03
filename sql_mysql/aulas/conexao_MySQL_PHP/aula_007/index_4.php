<?php

    /*
    Vamos adicionar algum controle de erros para impedir
    que a aplicação termine com um erro.
    */

    // dados de ligação
    $database = 'udemy_loja_online';
    $username = 'user_loja_web';
    $password = 'bieldahora321';

    try {

        // ligação
        $ligacao = new PDO("mysql:host=localhost;dbname=$database;charset=utf8", $username, $password);

        // execução da query
        $resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_OBJ);

    } catch (PDOException $err) {

        $erro = "Aconteceu um erro na ligação.";
    }

    // fechar a ligação
    $ligacao = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - Apresentação de dados de uma query SQL</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-5">

                <?php if (!empty($erro)) : ?>
                    <p class="text-center text-danger"><?= $erro ?></p>
                <?php else : ?>
                    <?php if (count($resultados) == 0) : ?>
                        <p class="text-center">Não foram encontrados dados.</p>
                    <?php else : ?>

                        <?php foreach ($resultados as $produto) : ?>
                            <div class="card p-3 mb-2 bg-light text-center">
                                <h5><?= $produto->produto ?></h5>
                                <h3 class="text-primary"><?= $produto->preco_unidade ?> $</h5>
                            </div>
                        <?php endforeach; ?>

                    <?php endif; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>

</body>

</html>