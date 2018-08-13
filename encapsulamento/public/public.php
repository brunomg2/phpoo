<?php
//Ao usarmos o encapsulamento dos atributos e metodos da classe como public podemos acessalos de dentro da classe, das classes que são herdeiras e também do programa
//que utiliza aquela classe, o tipo public facilita o acesso porem é algo perigoso devido a classe não se responsabilizar pela consistencia dos dados
//podendo assim existir dados inconsistentes

class Pessoa {
    public $nome;
    public $endereco;
    public $nascimento;
}

$p1 = new Pessoa;
$p1->nome = 'Bruno Gabriel';
$p1->endereco = 'travessa centro';
$p1->nascimento = 'goiaba';
$p1->telefone = '(75) 12345-5678'; // definida em tempo de execução

//vimos que ao usarmos a propiedade public erros como a incosistencia dos dados pode ser algo grave exemplo da data de nascimento que atribuimos os dados
// da data como goiaba se orestante do nosso programa necessitasse desse dado fara fazer alguma operação comprometeriamos todo o sistema

print_r($p1);