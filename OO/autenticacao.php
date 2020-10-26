<?php

require_once 'autoload.php';

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Funcionario\{Diretor,Gerente};
use Alura\Banco\Modelo\Cpf;

$autenticador = new Autenticador();
$umDiretor = new Gerente('Brenno dos Santos Fernandes',new Cpf('001.668.312-98'),10520);


$autenticador->tentarLogin($umDiretor,'4321');