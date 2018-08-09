<?php
class Pessoa{
    private $Nome;
    private $Cargo;

    public function __construct($nome,$cargo) {
        $this->Nome = $nome;
        $this->Cargo = $cargo;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function getCargo() {
        return $this->Cargo;
    }
}