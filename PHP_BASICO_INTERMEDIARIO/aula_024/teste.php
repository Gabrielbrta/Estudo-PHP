<?php 
    $nomes = ["Ana", "Beatriz", "Carlos", "Daniel", "Eduardo", "Fernanda", "Gabriel"];

    //Adicionado um elemento no começo do array
    array_unshift($nomes, 'Pedroso');

    //Adicionado um elemento no final do array
    array_push($nomes, 'Calabreso', 'Testosterono');

    //removido o primeiro elemento do array
    $removidosInicio = array_shift($nomes);

    //removido o ultimo elemento do array
    $removidosFinal = array_pop($nomes);

    // removido pelo indice
    unset($nomes[3]);
    
    echo "<pre>";
    echo print_r($nomes);
    echo "</pre>";
    
    echo $removidosInicio . '<br>';
    echo $removidosFinal . '<br>';
    
    // transformando os valores de um array em uma string com os valores separados por vírgula
    $nomes2 = implode(' ', $nomes);
    
    // cada elemento de uma string sera colocado em uma array e terá sua respectiva chave
    $nomes2 = str_split($nomes2);
    echo "<pre>";
    echo print_r($nomes2);
    echo "</pre>";

   $arraySize = (int) count($nomes2);

    for($i = 0; $i < $arraySize; $i++) {
        echo $nomes2[$i];
        sleep(1);
    }

    
    // $nomes2 = explode(' ', $nomes2);

    // echo "<pre>";
    // echo print_r($nomes2);
    // echo "</pre>";
?>