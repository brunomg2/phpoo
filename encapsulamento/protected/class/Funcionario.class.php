<?php
class Funcionario extends Pessoa {
    private $cargo;
    private $salario;

    public function contrata($cargo,$salario) {
        $this->salario = (is_numeric($salario)) ? $salario : NULL;
        $this->cargo = (is_string($cargo)) ? $cargo : NULL;
    }

    public function getInfor() {
        return "Nome: {$this->nome}, Salario: {$this->salario}, função: {$this->cargo}";
    }
}