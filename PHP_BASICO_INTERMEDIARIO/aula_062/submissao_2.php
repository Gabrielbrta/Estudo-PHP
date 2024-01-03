<?php

// Se não houve uma submissão de formulário, dá acesso inválido
// joao hash : '$2y$10$541nZLM.qW9sEwCoDE4u7ex3MDEMcmwR38XN8vLBZeMbLjduTeY6S'
// ana hash : '$2y$10$d1fHPJ9AafNWJzxLrhgSCOIA0V8ejKgEi9w/b1.w21G9W5nnHkJlS'
// carlos hash : '$2y$10$9KSQq.ujwGOwMmJX7mGQ/erNHDJnzvZT6j7KHHzEw.xkTa1vY4s.O'

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('<h1>ACESSO INVÁLIDO!!!</h1>');
}

$username = isset($_POST['text_username']) ? trim($_POST['text_username']) : '';
$password = isset($_POST['text_password']) ? trim($_POST['text_password']) : '';

$users = [
    'joao' => '$2y$10$541nZLM.qW9sEwCoDE4u7ex3MDEMcmwR38XN8vLBZeMbLjduTeY6S', // aaa;
    'ana' => '$2y$10$d1fHPJ9AafNWJzxLrhgSCOIA0V8ejKgEi9w/b1.w21G9W5nnHkJlS', // bbb;
    'carlos' => '$2y$10$9KSQq.ujwGOwMmJX7mGQ/erNHDJnzvZT6j7KHHzEw.xkTa1vY4s.O', // ccc;
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login 2</title>
</head>
<body>
    <?php if(key_exists($username, $users)) : ?>
        <?php if(password_verify($password, $users[$username])) : ?>
            <h1>LOGIN OK!!!</h1>
        <?php else :?>
            <h1>LOGIN INVÁLIDO!!!</h1>
        <?php endif; ?>
    <?php else :?>
        <h1>LOGIN INVÁLIDO!!!</h1>
    <?php endif;?>
</body>
</html>