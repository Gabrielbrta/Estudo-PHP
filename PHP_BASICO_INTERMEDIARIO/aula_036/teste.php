<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>

<body>
    <?php 
        $nome = "";
        switch(empty($nome)) {
            case $nome !== false :
                echo "<h1>Nome não definido</h1>";
                break;
            case $nome == false :
                echo "<h1>Seu nome é $nome</h1>";
                break;
            
        }
    ?>
</body>

</html>