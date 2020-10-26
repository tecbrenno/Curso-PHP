<?php 

require_once 'autoload.php';


use Alura\Banco\Modelo\{Cpf,Endereco};
use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor, EditorVideo};
use Alura\Banco\Service\ControladorDeBonificacoes;


$cpf = new Cpf('001.668.312-98');
$Desenvolvedor = new Desenvolvedor('Brenno dos Santos Fernandes',$cpf,1989.58);
$Desenvolvedor->sobeDeNivel();

$cpf2 = new Cpf('008.608.300-12');
$gerente = new Gerente('Isabella Caldeira da Rocha',$cpf2,3500);

$umEditor = new EditorVideo('Arthur do Val',new Cpf('012.544.985-08'),1890);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionarBonificacao($Desenvolvedor);
$controlador->adicionarBonificacao($gerente);
$controlador->adicionarBonificacao($umEditor);

echo $controlador->recuperarTotBonificao();
//var_dump($umFuncionario);