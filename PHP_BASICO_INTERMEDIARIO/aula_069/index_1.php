<?php

// TRATAMENTO DE ERROS

/*
No vídeo anterior vimos como ativar e controlar
a forma como o PHP apresenta (ou não) os erros dos
nossos scripts. No entanto, o desafio está em executar
o nosso código de forma a que, sempre que um potencial
erro ocorra, a nossa aplicação seja capaz de o capturar
e seguir um caminho alternativo.

É sobre isso que iremos falar neste vídeo.

Vamos começar por tratamento de excepções.
É um mecanismo que serve para alterar o fluxo normal
da execução do código, se ocorrer um erro especificado (excepcional). 
Esta condição é chamada de excepção.
*/

function adicionar($n1, $n2) {
    if(!is_numeric($n1) || !is_numeric($n2)) {
        throw new Exception("Um dos valores não é numérico!");
    }
    return $n1 + $n2;
}

// echo adicionar("joao", 10);


// agora usando a estrutura try catch para impedir o fim da execução.

try {
    echo  adicionar("joao", 30);
} catch (Exception $erro) {
    echo $erro -> getMessage();
}

echo '<br>Fim do script.';

// o que aconteceu neste script?

