<?php
require_once 'class/Conta.class.php';
require_once 'class/ContaCorrente.class.php';
require_once 'class/ContaPoupanca.class.php';

$contas = [];

$contas[] = new ContaCorrente(6677,'CC 123.56',100,500);
$contas[] = new ContaPoupanca(6678,'CC 123.57',100);

foreach($contas as $key => $conta):
    echo "Conta: {$conta->getInfo()}<br>";
    echo "Saldo atual: {$conta->getSaldo()}<br>";
    $conta->depositar(200);
    echo 'Deposito de 200 <br>';
    echo "Saldo atual: {$conta->getSaldo()}<br>";
    
    if($conta->saque(700)){
        echo 'Retirada de 700<br>';
    }else{
        echo 'Retirada de 700 <b>(Não permitida)</b><br>';
    }
    echo "Saldo atual: {$conta->getSaldo()}<br>";
    echo'<hr>';
endforeach;
