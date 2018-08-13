<?php
require_once 'class/Conta.class.php';
require_once 'class/ContaPoupanca.class.php';

class ContaPoupancaUniversitaria extends ContaPoupanca{

}

//definimos a classe ContaPoupanca como uma classe final então ao tentarmos criar uma classe que extend a classe ContaPoupanca nos é retornado um erro