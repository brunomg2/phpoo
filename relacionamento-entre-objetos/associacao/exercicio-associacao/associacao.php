<?php
require_once 'class/Pessoa.class.php';
require_once 'class/Empresa.class.php';
$bruno = new Pessoa('Bruno','Programador');
$hdconsult = new Empresa('HD Consultoria', 'Rua Central');

$hdconsult->setFuncionario($bruno);
$hdconsult->getFuncionario()->setSalario(2000);
$hdconsult->getFuncionario()->setProfissao('Gerente de Projetos');

echo '<pre>';
var_dump($hdconsult);
echo '</pre>';

echo'<hr>';

echo '<pre>';
var_dump($bruno);
echo '</pre>';

echo '<hr>';

echo "{$bruno->getNome()} trabalha na {$bruno->getEmpresa()->getNome()} como {$bruno->getProfissao()} e recebe {$bruno->getSalario()} por mês<br>";

echo "A empresa {$hdconsult->getNome()} esta localizada no endereco {$hdconsult->getEndereco()} e possui {$hdconsult->getQuantidadeFuncionarios()} funcionarios";