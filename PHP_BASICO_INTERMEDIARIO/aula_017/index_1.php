<?php

    // BOOLEANS

    // são variáveis com dois valores possíveis: verdadeiro ou falso

    $apresentar_nome = true;
    $apresentar_idade = false;

    // os valores são case insensitive
    $mostrar = TRUE;    // o mesmo que $mostrar = true;
    $mostrar = 'texto';
    // são variáveis usadas maioritariamente em 
    // estruturas de controlo do fluxo do código: 
    // ciclos (loops) e instruções condicionais

    // veremos nessa altura que podemos converter valores em booleanos.
    // tradicionalmente, o valor zero (0) é equivalente a false e todos
    // os outros valores são equivalentes a true.

    // podemos ainda determinar se uma variável é booleana ou não
    echo gettype(is_bool($mostrar));