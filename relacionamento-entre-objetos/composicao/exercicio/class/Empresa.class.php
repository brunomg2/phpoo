<?php
class Empresa{
    private $Nome;
    private $Endereco;
    private $Funcionario;

    public function __construct($nome,$endereco) {
        $this->Nome = $nome;
        $this->Endereco = $endereco;
    }
    public function addFuncionario($nome,$cargo) {

        $this->Funcionario[] = new Pessoa($nome,$cargo);
    }

    public function getFuncionario() {
        return $this->Funcionario;
    }

    public function getNome() {
        return $this->Nome;
    }

    
}