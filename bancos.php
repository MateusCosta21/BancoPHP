<?php
require_once 'src/Conta.php';
require_once 'src/Titular.php';


$primeiraConta = new Conta(new Titular("123.456.789-00","João Mateus da Costa Santos"));
$primeiraConta -> depositar(500);
$primeiraConta -> sacar(50);
echo $primeiraConta->recuperaSaldo().PHP_EOL;
echo $primeiraConta->recuperaCpfTitular().PHP_EOL;
echo $primeiraConta->recuperaNomeTitular();

echo Conta::recuperaNumerodeContas();


