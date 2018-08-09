<?php
class Empresa{
    private $Nome;
    private $Endereco;
    private $Funcionario;
    private $quantidadeFuncionarios;

    public function __construct($nome,$endereco) {
        $this->Nome = $nome;
        $this->Endereco = $endereco;
    }

    public function getNome() {
        return $this->Nome;
    }
    public function getEndereco() {
        return $this->Endereco;
    }
    public function getFuncionario() {
        return $this->Funcionario;
    }

    public function getQuantidadeFuncionarios() {
        return $this->quantidadeFuncionarios;
    }
    
    public function setFuncionario(Pessoa $funcionario) {
        $this->Funcionario = $funcionario;
        $this->Funcionario->setEmpresa($this);
        $this->setQuantidade();
    }

    private function setQuantidade() {
        $this->quantidadeFuncionarios += 1;
    }
}