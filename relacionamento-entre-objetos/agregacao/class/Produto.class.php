<?php
class Produto {
    private $descricao;
    private $estoque;
    private $preco;

    public function __construct($descricao,$estoque,$preco) {
        $this->descricao = (string) $descricao;
        $this->estoque = (is_numeric($estoque) && $estoque >= 0 ? $estoque : NULL);
        $this->preco = (is_numeric($preco) && $preco > 0 ? $preco : NULL);
    }

    public function getDescricao() {
        return $this->descricao;
    }
}