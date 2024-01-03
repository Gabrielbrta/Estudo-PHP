<?php

// HEREDITARIEDADE

// vejamos os conceitos num exemplo mais prático
class Animal_De_Estimacao {
    protected $nome;
    protected $especie;
    protected $raca;

    function __construct($nome, $especie, $raca)
    {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->raca = $raca;
    }
}

class Cao extends Animal_De_Estimacao 
{
    function latir($vezes) {
        echo "O {$this->especie} {$this->nome} da raça {$this->raca} Latiu $vezes vezes";
    }

}

class Gato extends Animal_De_Estimacao 
{
    function miar($vezes) {
        echo "O {$this->especie} {$this->nome} da raça {$this->raca} miou $vezes vezes";
    }
}

// instanciação das classes em objetos


// não só cada objeto tem as propriedades da classe base,
// como também tem as funcionalidades que cada classe implementa.
// Portanto:
$rex = new Cao("Rex", "Cachorro", "Pitbull");
$satan = new Gato("Satan", "Gato", "Sphinx");

$rex->latir(10);
echo "<br>";
$satan->miar(4);

/* 
Observa que, na classe Animal_de_estimação, as propriedades
foram definidas com o access modifier PROTECTED.
Já tinha referido que no caso do PROTECTED, a propriedade ou método
pode ser acedida dentro da classe e dentro de classes derivadas dela.
*/