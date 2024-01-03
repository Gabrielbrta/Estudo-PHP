<?php

    /*
    Agora com a query bem organizada, voltamos a ter o resultado esperado.
    Mas vamos acrescentar na query uma cláusula WHERE.
    Ela vai indicar que só queremos os produtos cujo ID seja superior
    a 100. Não existe nenhum produto nessa situação.
    Então vamos ter o retorno de $resultados = []
    Não existem produtos na coleção.
    */

    // dados de ligação
    $database = 'udemy_loja_online';
    $username = 'user_loja_web';
    $password = 'bieldahora321';

    $querie = "SELECT * FROM produtos";

    try {

        // ligação
        $ligacao = new PDO("mysql:host=localhost; dbname=$database", $username,$password);
        $resultados = $ligacao->query($querie)->fetchAll(PDO::FETCH_OBJ);
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
                <?php if(!empty($erro)) :?>
                    <h3 class="text-danger"><?= $erro ?></h3>
                <?php else :?>  

                    <?php if(!empty($resultados)) : ?>
                        <?php foreach($resultados as $produto) :?>
                            <div class="card p-3 mb-2 bg-light text-center">
                                <h2 class="h3"><?= $produto->produto ?></h2>
                                <h4 class="text-center text-primary"><?= $produto->preco_unidade ?></h4>
                            </div>
                        <?php endforeach;?>

                    <?php else : ?>
                        <?= $erro = "<h3 class='text-danger'>Nenhum dado foi encontrado!</h3>"?>
                    <?php endif;?>
                <?php endif;?>
            </div>
        </div>
    </div>

</body>

</html>