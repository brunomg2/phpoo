<?php
require_once 'class/Cesta.class.php';
require_once 'class/Produto.class.php';

//criacao da cesta


$c1 = new Cesta;

$c1->addItem($p1 = new Produto('chocolate',10,7));
$c1->addItem($p2 = new Produto('Café',100,5));
$c1->addItem($p3 = new Produto('Mostarda',50,10));

foreach($c1->getItens() as $item) {
    echo "Item: {$item->getDescricao()} <br>";
}