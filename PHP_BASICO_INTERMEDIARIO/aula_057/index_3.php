<?php

/* 
A leitura é feita usando a função fgetcsv
*/

echo '<pre>';

$file = fopen('dados.csv', 'r');

    while(!feof($file)) {
        print_r(fgetcsv($file)); 
    }

fclose($file);