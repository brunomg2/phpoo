<?php
class Pessoa {
    protected $nome;

    public function __construct($nome) {
        $this->nome = (is_string($nome)) ? $nome : NULL;
    }
}