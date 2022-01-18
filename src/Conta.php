<?php
class Conta{
    private $titular;
    private $saldo = 0;
    private static $numerodeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this-> saldo = 0;
        self::$numerodeContas++;
    }

    public function __destruct(){
        self::$numerodeContas--;
    }

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

    public function recuperaNomeTitular():string
    {
        return $this -> titular->recuperaNome();
    }

    public function recuperaCpfTitular():string
    {
        return $this -> titular->recuperaCpf();
    }




    public static function recuperaNumerodeContas() :int
    {
        return self::$numerodeContas;
    }




}

