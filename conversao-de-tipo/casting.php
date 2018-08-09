<?php

//Criando um objeto através de um array (casting conversão de tipo)

$produto = new stdClass;
$produto->descricao = 'Chocolate amargo';
$produto->quantidade = 100;
$produto->preco = 7;

//usando a sintaxe $vetor1 = (array) objeto criamos um array com todos os dados do objeto sendo os atributos as chaves e os valores o conteudo salvo no atributo
$vetor1 = (array) $produto;
print_r($vetor1);

echo "<hr>";
//usando a sintaxe $produto2 = (object) $vetor1 criamos um objeto da classe stdClass conteudo as chaves do array como atributos e os valores do array como valores
//dos atributos
$produto2 = (object) $vetor1;
print_r($produto2);