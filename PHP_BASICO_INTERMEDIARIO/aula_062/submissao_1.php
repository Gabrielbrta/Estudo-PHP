<?php

// Este script vai tratar a submissão do formulário.

// verifica se o método POST foi executado
if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Acesso inválido!');
}

// verifica se os campos foram preenchidos e atribui uma string vazia caso não estejam preechidos.
$username = isset($_POST['text_username']) ? $_POST['text_username'] : '';
$password = isset($_POST['text_password']) ? $_POST['text_password'] : '';

// Declaro os valores válidos de cada campo.
$user = [
    "username" => "Gabriel",
    "password" => "131415"
];

// Verifico se o usuário e a senha estão corretos.
if($username == $user['username'] && $password == $user['password']) {
    echo "<h1>LOGIN OK!</h1>";
} else {
    echo "<h1>LOGIN INVÁLIDO</h1>";
}

// link para o inicio.
echo "<a href='./index_1.php'>Voltar</a>";

// NOTA: existem aspetos deste script que não são boas práticas