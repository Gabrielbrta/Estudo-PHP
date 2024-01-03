<?php 
class Mulher {
    private $nome;
    private $sobrenome;

    function __construct($nome, $sobrenome) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }

    function show_name() {
        echo "Meu nome é: " . $this->nome;
    }

    function show_surname() {
        echo "Meu sobrenome é: " . $this->sobrenome;
    }

    function complete_name() {
        echo "Meu nome completo é: ". $this->nome . " " . $this->sobrenome;
    }
}

$lucia = new Mulher("Lucia", "Hermida Pedroso");
$lucia->show_name();
echo "<br>";
$lucia->show_surname();
echo "<br>";
$lucia->complete_name();
?>