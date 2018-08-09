<?php
class Produto{
    private $Nome;
    private $Quantidade;
    private $Preco;
    private $Caracteristicas;

    public function __construct($nome,$quantidade,$preco) {
        $this->Nome = $nome;
        $this->Quantidade = $quantidade;
        $this->Preco = $preco;
    }

    public function addCaracteristica($nome, $valor) {
        $this->Caracteristicas[] = new Caracteristica($nome,$valor);
    }

    public function getCaracteristica() {
        return $this->Caracteristicas;
    }

    public function getNome() {
        return $this->Nome;
    }
}