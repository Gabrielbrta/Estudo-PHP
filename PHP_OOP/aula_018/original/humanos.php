<?php 
class Humanos {
    private $masc = [];
    private $femi = [];
    private $desc = [];

    public function definir($sexo, $nome) {
        $sexo == 'F' || $sexo == "f" ? array_push($this->femi, $nome) : '';
        $sexo == 'm' || $sexo == "M" ? array_push($this->masc, $nome) : '';
        $sexo !== 'm' && $sexo !== "M" && $sexo !== "F" && $sexo !== 'f' ? array_push($this->desc, $nome) : '';
    }

    public function get_masculino() {
        return $this->masc;
    }

    public function get_feminino() {
        return $this->femi;
    }

    public function get_desconhecido() {
        return $this->desc;
    }
}

?>