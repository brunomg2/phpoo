<?php
class Software {
    private $id;
    private $nome;
    public static $contador;

    public function __construct($nome) {
        self::$contador ++;

        $this->id = self::$contador;
        $this->nome = $nome;

        print "Software {$this->id} - {$this->nome} <br>";
    }
}

$p1 = new Software('dia');
$p2 = new Software('gimp');
$p3 = new Software('mysql');
$p4 = new Software('Krita');

echo 'Quantidade Criada = '.Software::$contador;