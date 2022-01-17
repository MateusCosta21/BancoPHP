<?php
class Conta{
    public $cpftitular;
    public $nometitular;
    public $saldo;

    public function sacar($valoraSacar){

        if($valoraSacar > $this->saldo){
            echo "Você não pode sacar";
        }
        else{
            $this->saldo -= $valoraSacar;
        }

    }


}

