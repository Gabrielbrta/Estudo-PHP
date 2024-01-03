<?php 
    $usuarios = [
        'Pedro' => [
            'Nome' => 'Pedro',
            'Idade' => 23,
            'Peso' => 68.5,
            'Altura' => 1.70,
        ],
        'Aline' => [
            'Nome' => 'Aline',
            'Idade' => 24,
            'Peso' => 54.3,
            'Altura' => 1.56,
        ],
    ];

    echo '<pre>';
    echo print_r($usuarios);
    echo '</pre>';

    echo $usuarios['Pedro']['Nome'] . '<br>';
    echo $usuarios['Pedro']['Idade'] . '<br>';
    echo $usuarios['Pedro']['Peso'] . '<br>';
    echo $usuarios['Aline']['Nome'] . '<br>';
    echo $usuarios['Aline']['Idade'] . '<br>';
    echo $usuarios['Aline']['Peso'] . '<br>';

?>