<?php 
    echo "<pre>";
    echo __DIR__ . "<br>";
    $files = scandir(__DIR__);
    print_r($files);
    echo "<hr>";
    
    $files2 = scandir('./');
    print_r($files2);
    echo "<hr>";
    
    $files3 = scandir('../');
    print_r($files3);
    echo "<hr>";

    foreach($files2 as $item) {
      echo is_file($item) ? 'Arquivo' : 'Pasta';
      echo "<br>";
    }
    echo "<hr>";
    foreach($files2 as $item) {
        if(is_file($item)) {
            echo $item . '<br>';
        }
    }
?>  