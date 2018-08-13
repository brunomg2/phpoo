<?php
require_once 'class/Conta.class.php';
require_once 'class/ContaCorrente.class.php';

class ContaCorrenteEspecial extends ContaCorrente {

    public function retirar($quantia) {
        $this->saldo -= $quantia;
    }
}

//definimos na classe Contacorrente o metodo retirar como um metodo final um metodo final não pode sofrer overide ou reescrita apenas pode usado pela classe filha
//isso retornará um erro