<?php 
class ContaCorrente extends Conta {
    protected $limite;

    public function __construct($agencia, $conta, $saldo, $limite) {
        parent::__construct($agencia,$conta,$saldo);
        $this->limite = (is_numeric($limite) ? $limite : 0);
    }

    public final function retirar($quantia) {
        if(($this->saldo + $this->limite) >= $quantia):
            $this->saldo -= $quantia;
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function almentarLimite ($valor) {
        $this->limite += (int) $valor;
    }
}