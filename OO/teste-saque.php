<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Conta,Titular, ContaCorrente, ContaPoupanca};
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;


$cpf = new Cpf('001.668.312-98');
$end = new Endereco('Rua 1','Cidade Nova','Manaus','125');
$titular = new Titular($cpf,'Brenno dos Santos Fernandes',$end);

$conta = new ContaPoupanca($titular);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperarSaldo();