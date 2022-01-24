<?php


namespace Alura\Banco\Modelo\Funcionario;


class Desenvolvedor
{
    public function sobeDeNivel ()
    {
        $this->recebeAumento($this->recuperaSalario()*0.75);

    }

}