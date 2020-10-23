<?php 

require_once 'autoload.php';

use Alura\Banco\Modelo\{Cpf,Funcionario,Endereco};
use Alura\Banco\Service\ControladorDeBonificacoes;


$cpf = new Cpf('001.668.312-98');
$umFuncionario = new Funcionario('Brenno dos Santos Fernandes',$cpf, 'Técnico em Informática',1989.58);

$cpf2 = new Cpf('008.608.300-12');
$umaFuncionaria = new Funcionario('Isabella Caldeira da Rocha',$cpf2, 'Gerente',3500);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionarBonificacao($umFuncionario);
$controlador->adicionarBonificacao($umaFuncionaria);

echo $controlador->recuperarBonificacao();
//var_dump($umFuncionario);