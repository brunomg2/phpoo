<?php
//a função get_object_vars retorna em formato de array os atributos da classe que são declarados como public e seus valores atribuidos

class Funcionario {
    public $nome;
    public $salario;
    public $departamento;
}

$jose = new Funcionario;
$jose->nome = 'Jose';
$jose->salario = 1300;
$jose->departamento = 'Financeiro';

print_r(get_object_vars($jose));