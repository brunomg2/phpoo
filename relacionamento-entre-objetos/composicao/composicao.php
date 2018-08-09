<?php
require_once 'class/Produto.class.php';
require_once 'class/Caracteristica.class.php';

$p1 = new Produto('chocolate',10,7);
$p1->addCaracteristica('cor','Branco');
$p1->addCaracteristica('peso','2.6 kg');

echo'<pre>';
var_dump($p1);
echo'</pre>';



echo'<hr>';
echo "Produto {$p1->getNome()} possui as seguintes caracteristicas: ";
foreach($p1->getCaracteristica() as $valor):
    echo $valor->getNome(). ' , ' . $valor->getValor().' , ';
endforeach;