<?php 
require_once 'class/Fabricante.class.php';
require_once 'class/Produto.class.php';

$p1 = new Produto('chocolate',100,7);
$f1 = new Fabricante('Chocolate Factory','Willy Wonka Street',1234567);

$p1->setFabricante($f1);

echo "A descrição é {$p1->getDescricao()}<br>";
echo "O fabricante é {$p1->getFabricante()->getNome()}<br>";
echo "Endereço do Fabricante {$p1->getFabricante()->getEndereco()}<br>";
echo "Documento do Fabricante {$p1->getFabricante()->getDocumento()}";