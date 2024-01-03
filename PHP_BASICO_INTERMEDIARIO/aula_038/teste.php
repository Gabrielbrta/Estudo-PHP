<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>
    <?php 
        $idade = 18;

        echo "<h1>Você é ". ($idade < 18 ? 'menor de idade!' : 'maior de idade!') ."</h1>";

    ?>
</body>
</html>