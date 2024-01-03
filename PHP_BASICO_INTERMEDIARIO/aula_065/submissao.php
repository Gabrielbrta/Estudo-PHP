<?php

// verifica se houve um request do tipo POST
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Acesso inválido.');
}

// -----------------------------------
/*
REGRAS DE VALIDAÇÃO:
- Todos os campos são de preenchimento obrigatório excepto o textarea.
- o primeiro campo de texto tem que ter entre 5 e 30 caracteres.
- o campo da senha, tem que ter exatamente 12 caracteres.
- das 3 checkboxes, pelo menos uma tem que estar selecionada.
- nos radiobuttons tem que existir uma opção selecionada.
- no caso do textarea, não é obrigatório, mas se tiver texto
  tem que ter, no mínimo, 30 caracteres.
*/

$erros = [];

// texto
//text_texto
if(empty($_POST['text_texto'])) {
    $erros[] = "O campo de nome é de preenchimento obrigatório!";
} else {
    if(strlen($_POST['text_texto']) < 5 || strlen($_POST['text_texto']) > 30) {
        $erros[] = "O valor de nome tem que ter de 5 a 30 caracteres";
    }
}

// password
//text_password
if(empty($_POST['text_password'])) {
    $erros[] = "O campo de senha é de preenchimento obrigatório!";
} else {
    if(strlen($_POST['text_password']) != 12) {
        $erros[] = "A senha deve conter 12 caracteres";
    }
}

// select
// select_pais
if(empty($_POST['select_pais'])) {
    $erros[] = "O campo de seleção dos paises é de preenchimento obrigatório!"; 
}

// checkboxes
// check_1 check_2 check_3
if(empty($_POST['check_1']) && empty($_POST['check_2']) && empty($_POST['check_3'])) {
    $erros[] = "Uma das caixas precisa estar selecionadas!";
}

// radiobuttons
// radio
if(empty($_POST['radio'])) {
    $erros[] = "Um dos circulos precisa estar selecionado!";
}

// Área de texto
// text_area
if(!empty($_POST['text_area'])) {
    if(strlen($_POST['text_area']) < 30) {
        $erros[] = "O campo de area de texto precisa ter no mínimo 30 caracteres";
    }
}

// ----------------------------
// apresenta os erros, se existirem, caso contrário, apresenta os resultados

if(empty($erros)) {
    echo "<pre>";
    print_r($_POST);
} else {
    echo "<ul>";
        foreach($erros as $erro) {
            echo "<li>$erro</li>";
        }
    echo "</ul>";
}
