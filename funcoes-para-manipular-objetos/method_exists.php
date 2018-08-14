<?php
//verifica se um metodo existe a função nos retorna um boolean podendo assim ser feitas verificações antes de executar os metodos

class Funcionario {
    public $nome;
    public $salario;
    public $departamento;

    function setSalario() {}
    function getSalario() {}
}

$jose = new Funcionario;

if(method_exists($jose,'setSalario')):
    echo 'o metodo existe';
else:
    echo 'O metodo não existe';
endif;