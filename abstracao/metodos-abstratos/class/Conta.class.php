<?php
abstract class Conta {

    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia,$conta,$saldo) {
        $this->agencia = (int) $agencia;
        $this->conta = (string) $conta;
        $this->saldo = (is_numeric($saldo) && $saldo >= 0 ? $saldo : NULL);
    }

    public function getInfo() {
        return "Ágencia: {$this->agencia}, Conta: {$this->conta}";
    }

    public function depositar($quantia) {
        $this->saldo += (is_numeric($quantia) && $quantia > 0 ? $quantia : 0);
    }
    public function getSaldo() {
        return $this->saldo;
    }

    abstract function retirar($quantia);

    //Ao definirmos um metodo como abstact forçamos com que todas as classes filhas da super classe onde encontra-se o metodo abstrato seja obrigdo a imprelemtalo
    //com isso podemos ter uma maior segurança para que as classes não se tornem incompletas
}