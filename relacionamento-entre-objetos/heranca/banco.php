<?php
require_once 'class/Conta.class.php';
require_once 'class/ContaPoupanca.class.php';
require_once 'class/ContaCorrente.class.php';

$conta = new ContaPoupanca(6677,'PP 123.57',100);
$conta->depositar(100);
$conta->saque(50);

echo '<pre>';
var_dump($conta);
echo '</pre>';

echo '<hr>';

$contaC = new ContaCorrente(6676,'CC 123.57',100,0);

if(!$contaC->saque(50)):
    echo 'Saque não permitido Saldo + Limite abaixo do valor do saque';
else:
    echo 'Saque eftuado com sucesso';
endif;

$contaC->almentarLimite(100);

//$contaC->saque(150);

echo '<pre>';
var_dump($contaC);
echo '</pre>';