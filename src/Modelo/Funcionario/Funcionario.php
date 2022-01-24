<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;



abstract class Funcionario extends Pessoa
{

    private $cargo;
    private $salario;


    public function __construct( string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome,$cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }


    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome($nome)
    {
        $this->validaNomeTitular($nome);
        $this->nome=$nome;
    }

    public function recuperaSalario(){
        return $this->salario;
    }
    public function recebeAumento(float $valorAumento){
        if($valorAumento<0){
            echo "Valor deve ser positivo";
            return;
        }
            $this->salario+=$valorAumento;

    }


    public function calculaBonificacao(){
        return $this->salario*0.1;
}



}