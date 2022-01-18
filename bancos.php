<?php
require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta -> depositar(500);
$primeiraConta -> sacar(50);
$primeiraConta -> defineNomeTitular("João Mateus");
$primeiraConta->defineCpfTitular("123.456.789-00");
echo $primeiraConta->recuperaSaldo().PHP_EOL;
echo $primeiraConta->recuperarCpfTitular().PHP_EOL;
echo $primeiraConta->recuperarNomeTitular();


