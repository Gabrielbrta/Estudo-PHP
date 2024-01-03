<?php

session_start();

/*
REGRAS DE VALIDAÇÃO:
- Todos os campos são de preenchimento obrigatório
- o primeiro campo username tem que ter entre 5 e 30 caracteres
- o campo da password, tem que ter exatamente 12 caracteres

Neste caso vamos querer guardar mais informações nas validações:
    1. O nome do campo analisado
    2. O valor que ele tem
    3. A eventual mensagem de erro

Os dois primeiros valores são fundamentais para apresentar os
valores anteriormente submetidos. Neste caso vamos apenas
usar o do username

Quando existir um erro, o primeiro valor e o terceiro
vão ser fundamentais para apresentar o erro no local correto
*/

// -----------------------------------------
// no caso de alguém tentar entrar no script de forma direta
// vamos redirecionar diretamente para o formulário de login
if($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: form.php');
    return;
}


// -----------------------------------------
// agora vamos analisar os erros e preparar o regresso ao
// formulário, se for o caso. Vamos precisar de dados.
$inputs = [];
// -----------------------------------------
// username
$inputs['text_username'] = [
    'value' => '',
    'erro' => '',
];

// -----------------------------------------
// password
$inputs['text_password'] = [
    'value' => '',
    'erro' => '',
];

// -----------------------------------------
// vamos verificar se existem erros.
// em caso afirmativo, vamos colocar a informação dos inputs na sessão 
// e redirecionar para o formulário, para apresentar os erros e valores.

// verifica se existe erro no campo de username e atribuí o valor colocado para que o usuario não precise escrever tudo de novo.
if(empty($_POST['text_username'])) {
    $inputs['text_username']['erro'] = 'Este campo é de preenchimento obrigatório!';
} else {
    $inputs['text_username']['value'] = $_POST['text_username'];
    if(strlen($_POST['text_username']) < 5 || strlen($_POST['text_username']) > 30) {
        $inputs['text_username']['erro'] = "O campo precisa de 5 a 30 caracteres!";
    }
}

if(empty($_POST['text_password'])) {
    $inputs['text_password']['erro'] = 'Este campo é de preenchimento obrigatório!';
} else {
    if(strlen($_POST['text_password']) != 12) {
        $inputs['text_password']['erro'] = 'A senha precisa conter 12 caracteres!';
    }
}

// se existir erros enviaremos os erros pela variável da sessão.
    // atribuo o erro a váriavel da sessão
    // retorna para a página de login com os erros atualizados.
    if(!empty($inputs['text_username']['erro']) || !empty($inputs['text_password']['erro'])) {
        $_SESSION['inputs'] = $inputs;
        header("Location: form.php");
        return;
    }

// no caso de não haver erros, vamos apresentar os valores
echo "<p>Username:<strong>". $_POST['text_username'] ."</strong></p>";
echo "<p>Password:<strong>". $_POST['text_password'] ."</strong></p>";
