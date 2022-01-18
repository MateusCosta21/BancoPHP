<?php


class Titular
{
    private $cpf;
    private $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }


    public function recuperaCpf(): string
    {
        return $this->cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }
    private function validaNomeTitular(string $nometitular)
    {
        if(strlen($nometitular) < 5){
            echo "nome precisa pelo menos 05 caracteres";
            exit();
        }
    }


}