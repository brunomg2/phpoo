<?php
class Caracteristica{
    private $Nome;
    private $Valor;

    public function __construct($nome,$valor) {
        $this->Nome = $nome;
        $this->Valor = $valor;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function getValor() {
        return $this->Valor;
    }
}