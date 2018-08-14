<?php
//a função get_class_mthods retorna em um array os metodos da classe

class Funcionario {
    function getSalario(){}
    function setSalario(){}
    function setNome(){}
    function getNome(){}
}

print_r(get_class_methods('Funcionario'));
