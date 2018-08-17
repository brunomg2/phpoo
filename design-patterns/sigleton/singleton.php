<?php
require_once 'class/Preferencias.class.php';

$p1 = Preferencias::getInstance();
print 'A linguagem é '.$p1->getData('language'). '<br>';
$p1->setData('language','pt-br');
print 'A linguagem é '.$p1->getData('language'). '<br>';

$p2 = Preferencias::getInstance();
print 'A linguagem é '.$p2->getData('language'). '<br>';

//Descomentar para gravar o valor
//$p1->save();

