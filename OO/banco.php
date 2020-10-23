<?php 

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Conta;

$cpf = new Cpf('001.668.312-98');
$novoEndereco = new Endereco('Rua Barão de Loreto', 'Flores', 'Manaus', '34');
$novoTitular = new Titular($cpf,'Brenno dos Santos Fernandes',$novoEndereco);

$cpf2 = new Cpf('013.665.952-70');
$novoEndereco2 = new Endereco('Av Uirapuru','Cidade Nova', 'Manaus', '188');
$novoTitular2 = new Titular($cpf2,'Eduarda Cristina dos Santos Barros',$novoEndereco2);


$novaConta = new Conta($novoTitular);
$novaConta->depositar(600);

$novaConta2 = new Conta($novoTitular2);
$novaConta2->depositar(300);


$novaConta->transferir(200,$novaConta2);

echo $novaConta2->recuperarNomeTitular() . PHP_EOL;
echo $novaConta2->recuperarSaldo() . PHP_EOL;

PHP_EOL;

echo $novaConta->recuperarNomeTitular() . PHP_EOL;
echo $novaConta->recuperarSaldo() . PHP_EOL;