<?php
$produto = array();
$produto['descricao'] = 'Chocolate Amargo';
$produto['quantidade'] = 100;
$produto['preco'] = 7;

$objeto = new stdClass;

foreach($produto as $chave => $valor):
    $objeto->$chave = $valor;
endforeach;

print_r($objeto);