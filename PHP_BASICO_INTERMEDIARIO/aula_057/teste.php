<?php 
    $file = fopen('dados.csv', 'w');
    $header = ['Coluna A', 'Coluna B', 'Coluna C'];

    fputcsv($file, $header);

    for ($i = 1; $i <= 100 ; $i++) { 
        $linha = [rand(100, 900), rand(100, 900), rand(100, 900)];
        fputcsv($file, $linha);
    }
    fclose($file);
?>