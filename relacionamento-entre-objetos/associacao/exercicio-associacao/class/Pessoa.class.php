<?php
class Pessoa{
    private $Nome;
    private $Profissao;
    private $Salario;
    private $Empresa;

    public function __construct($nome,$profissao) {
        $this->Nome = $nome;
        $this->Profissao = $profissao;
    }

    public function getSalario() {
        return $this->Salario;
    }

    public function getEmpresa() {
        return $this->Empresa;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function getProfissao() {
        return $this->Profissao;
    }

    public function setSalario($salario) {
        $this->Salario = $salario;
    }
    
    public function SetEmpresa(Empresa $empresa) {
        $this->Empresa = $empresa;
    }

    public function setProfissao($profissao) {
        $this->Profissao = $profissao;
    }

}