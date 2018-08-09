<?php
class Produto{
    private $Descricao;
    private $Estoque;
    private $Preco;

    public function __construct($Descricao,$Estoque,$Preco) {
        $this->Descricao = $Descricao;
        $this->Estoque = $Estoque;
        $this->Preco = $Preco;

        print 'Construido o objeto<br>';
    }

    public function __destruct() {
        print 'O Objeto foi Destruido';
    }


}