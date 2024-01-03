<?php

// iniciação dos arrays
$numeros_positivos = [];
$numeros_negativos = [];
$textos = [];
$textos_teste = [];

// lógica aqui...

$arquivo = fopen('dados.dat', 'r');

while(!feof($arquivo)) {
    $linha = fgets($arquivo);

    if(is_numeric($linha)){
        if((int) $linha > 0) {
            array_push($numeros_positivos, $linha);
        }
        else if((int) $linha < 0) {
            array_push($numeros_negativos, $linha);
        }
        continue;
    }
    if(str_contains($linha, 'TESTE')) {
        array_push($textos_teste, $linha);
    } else { 
        array_push($textos, $linha);

    }
}
fclose($arquivo);

// apresentação dos arrays
echo '<pre>';
print_r($numeros_positivos);
echo '<hr>';
print_r($numeros_negativos);
echo '<hr>';
print_r($textos);
echo '<hr>';
print_r($textos_teste);