<?php
class Fabricante{
    private $Nome;
    private $Endereco;
    private $Documento;
    
    public function __construct($nome,$endereco,$documento) {
        $this->Nome = (string) $nome;
        $this->Endereco = (string) $endereco;
        $this->Documento = (int) $documento;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function getEndereco() {
        return $this->Endereco;
    }

    public function getDocumento() {
        return $this->Documento;
    }
}