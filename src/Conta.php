<?php
class Conta{
    public $cpftitular;
    public $nometitular;
    public $saldo;
    public function sacar($valoraSacar) : void
    {
        if($valoraSacar > $this->saldo){
            echo "Você não pode sacar";
            return;
        }
            $this->saldo -= $valoraSacar;
    }
    public function depositar($valoraDepositar) : void
    {
        if($valoraDepositar <= 0 ){
            echo "Você não pode realizar um deposito";
            return;
        }
            $this->saldo += $valoraDepositar;
    }

    public function transferencia($valorATransferir, conta $contaDestino) : void
    {
        if($valorATransferir > $this -> saldo){
            echo "saldo indisponivel";
            return;
        }
            $this->sacar($valorATransferir);
            $contaDestino -> depositar($valorATransferir);
    }
}

