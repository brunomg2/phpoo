<?php
final class ContaPoupanca extends Conta {
    
    function saque($quantia) {
        if($this->saldo >= $quantia):
            $this->saldo -= $quantia;
            return TRUE;
        else:
            return FALSE;
        endif;
    }
}