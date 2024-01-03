<?php

// ESCOPO DE VARIÁVEIS

/* 
No entanto, a variável não estará acesível dentro de uma função.
*/

$nome = 'joao';

function executar(){
    global $nome;
    $nome = 'Pedrinho';
}
executar();
echo $nome;


/* 
Todas as variáveis dentro de uma função têm escopo local.
Apenas existem dentro da função.
Elas são criadas dentro da função e destruídas assim que
a função termina a sua execução.
*/

function adicionar(){
    $a = 100;
}

echo $a;