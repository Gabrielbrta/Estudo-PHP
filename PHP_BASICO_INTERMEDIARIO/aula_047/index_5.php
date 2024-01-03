<?php

// INCLUDE e REQUIRE

/* 
Imagina o cenário onde tens um conjunto de dados considerável
e queres definir isso dentro de um script à parte.
Também é possível seguindo o seguinte exemplo:
*/

$idades = require_once('teste.php');
$nomes = require_once('dados.php');

echo '<pre>';
print_r($idades);
print_r($nomes);
echo "</pre>";

foreach($idades as $idade) {
    echo ucfirst($idade) ."<br>";
}
foreach($nomes as $nome) {
    echo ucfirst($nome) ."<br>";
}
