<?php

require_once 'autoload.php';
use Alura\Banco\Modelo\Conta\{ContaPoupanca,ContaCorrente,Titular};
use Alura\Banco\Modelo\{CPF,Endereco};



$conta = new ContaPoupanca(new Titular
            (new CPF('123.456.789-10'),
            'João Mateus da Costa Santos',
            new Endereco('fortaleza','SAPIRANGA','A','444'),
        ),
        );

$conta -> deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();