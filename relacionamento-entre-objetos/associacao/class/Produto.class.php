<?php 
class Produto{
    private $Descricao;
    private $Estoque;
    private $Preco;
    private $Fabricante;

    public function __construct($descricao,$estoque,$preco) {
        $this->Descricao = (string) $descricao;
        $this->Estoque = (int) $estoque;
        $this->Preco = (int) $preco;
    }

    public function getDescricao() {
        return $this->Descricao;
    }

    public function setFabricante(Fabricante $fabricante) {
        $this->Fabricante = $fabricante;
    }

    public function getFabricante() {
        return $this->Fabricante;
    }
}