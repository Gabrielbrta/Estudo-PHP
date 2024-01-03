<?php

// MÉTODOS ESTÁTICOS

/* 
Uma classe pode conter métodos estáticos e métodos não estáticos.
Vejamos o exemplo:
*/

class Matematica
{
    public static function adicionar($n1, $n2) {
        return $n1 + $n2;
    }
    
    public function executar_operacao() {
        $resultado = self::adicionar(10, 20);
        return $this->operacao_final($resultado);
    }

    private function operacao_final($valor) {
        return $valor * 2;
    }
}

echo Matematica::adicionar(100,200);    // 300
echo '<br>';

$matematica = new Matematica();
echo $matematica->executar_operacao();  // 60

// O que aconteceu neste script?