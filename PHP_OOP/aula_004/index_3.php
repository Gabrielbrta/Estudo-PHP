<?php

// ACCESS MODIFIERS

/* 
Então qual é a importância dos Access Modifiers numa classe?

Cenário um:
Imagina que queres que a definição do $nome não possa ser direta.
Queres que exista uma espécie de validação antes que os objetos criados
a partir da classe possam aceitar o nome que queres definir.
*/

class Home
{

    private $nome;

    function set_nome($n) {
        $nomes_proibidos = ["joaquim", "pedro", "Marcia", "Gabriel"];

        if(in_array($n, $nomes_proibidos)) {
            return;
        }

        $this->nome = $n;
    }

    function get_nome() {
        return $this->nome;
    }
}

$g = new Home();
$g->set_nome('pedro');
echo "O meu nome é: " . $g->get_nome();
echo "<br>";

$g->set_nome("Carlinhos");
echo "O meu nome é: " . $g->get_nome();
echo "<br>";
// $a = new Homem();

// $a->set_nome('joao');
// echo 'O nome é: ' . $a->get_nome();    // vazio
// echo '<br>';

// $a->set_nome('antónio');
// echo 'O nome é: ' . $a->get_nome();    // antónio
// echo '<br>';

// Os access modifiers permitem-nos controlar de forma muito clara
// que informação e métodos estão disponíveis fora da classe.
// Esta filosofia é de extrema importância: uma classe só deve ter
// público aquilo que é absolutamente necessário.

// Veremos mais sobre os access modifiers quando falármos de hereditariedade.
