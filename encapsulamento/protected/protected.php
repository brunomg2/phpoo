<?php
require_once 'class/Pessoa.class.php';
require_once 'class/Funcionario.class.php';

$p1 = new Funcionario('Mario');
$p1->contrata('Programador',1600);
print $p1->getInfor();