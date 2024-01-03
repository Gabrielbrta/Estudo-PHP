<?php 
    $theme = !empty($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema</title>
    <style>
        .dark {
            background-color: black;
            color: white;
        }

        .light {
            background-color: white;
            color: black;
        }
    </style>
</head>
<body class="<?= $theme ?>">
    <a href="darkTheme.php">Tema Escuro</a> | <a href="lightTheme.php">Tema Claro</a>
    <h1>Lorem, ipsum.</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil deleniti unde tenetur consequuntur itaque, impedit minus quod praesentium eos? Non.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil deleniti unde tenetur consequuntur itaque, impedit minus quod praesentium eos? Non.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil deleniti unde tenetur consequuntur itaque, impedit minus quod praesentium eos? Non.</p>
</body>
</html>