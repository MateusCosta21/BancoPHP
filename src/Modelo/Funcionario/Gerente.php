<?php


namespace Alura\Banco\Modelo\Funcionario;


class Gerente extends Funcionario
{
    public function CalculaBonificacao(){
        return $this->recuperaSalario();
    }

}