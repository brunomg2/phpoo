<?php
class Produto{
    private $Descricao;
    private $Estoque;
    private $Preco;

    public function __construct($Descricao,$Estoque,$Preco) {
        $this->Descricao = (string) $Descricao ? $Descricao : NULL;
        $this->Estoque = (int) $Estoque && $Estoque > 0 ? $Estoque : NULL;
        $this->Preco = (int) $Preco && $Preco > 0 ? $Preco : NULL;

    }

    public function getData() {
        print_r($this);
    }

    public function getDescricao() {
        return $this->Descricao;
    }

    public function getEstoque() {
        return $this->Estoque;
    }

    public function getPreco() {
        return $this->Preco;
    }

}