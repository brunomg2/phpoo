<?php
require_once 'interface/OrcavelInterface.php';
require_once 'class/Orcamento.class.php';
require_once 'class/Produto.class.php';
require_once 'class/Servicos.class.php';

$o = new Orcamento;
$o->adciona(new Produto('Maquina',10,299),1);
$o->adciona(new Produto('barbeador',10,170),1);
$o->adciona(new Produto('cade',10,7),3);

$o->adciona(new Servicos('Corte de grama',20),1);
$o->adciona(new Servicos('Corte de barba',20),1);
$o->adciona(new Servicos('Limpeza',50),1);

print $o->calculaTotal();