<?php 

class Numero {
    private $numero;

    public function __construct($n1)
    {
        $this->numero = $n1;
    }

    public function get_numero() {
        echo $this->numero;
    }

    public function par_ou_impar() {
        $resultado = $this->numero % 2 == 0 ?  "Par" : "Impar";
        echo $resultado;
    }

    public function tabuada() {
        $resultados = [];
        for($i = 1; $i <= 10; $i++) {
            array_push($resultados, "$this->numero x $i = " . $this->numero * $i . "<br>" );
        }
        return print_r($resultados);
    }

    public function raiz_quadrada() {
        echo sqrt($this->numero);
    }
}
?>