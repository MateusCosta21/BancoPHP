<?php
class Conta{
    private $cpftitular;
    private $nometitular;
    private $saldo = 0;

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
    public function recuperaSaldo() : float
    {
        return $this-> saldo;
    }

    public function defineCpfTitular(string $cpf)
    {
        $this->cpftitular = $cpf;
    }

    public function recuperarCpfTitular() : string
    {
        return $this->cpftitular;
    }

    public function defineNomeTitular(string $nome):void
    {
        $this->nometitular = $nome;
    }

    public function recuperarNomeTitular() : string
    {
        return $this->nometitular;
    }





}

