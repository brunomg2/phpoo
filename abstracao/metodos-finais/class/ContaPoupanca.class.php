<?php
class ContaPoupanca extends Conta {
    
    function retirar($quantia) {
        if($this->saldo >= $quantia):
            $this->saldo -= $quantia;
            return TRUE;
        else:
            return FALSE;
        endif;
    }
}