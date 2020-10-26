<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Autentivavel;

class Titular extends Pessoa implements Autenticavel
{
	
	private Endereco $end;
	
	public function __construct(Cpf $cpf, string $nome, Endereco $ende)
	{
		Parent::__construct($cpf,$nome);		
		$this->end = $ende;
	}

	public function retornarEnd():Endereco
	{
		return $this->end;
	} 

	public function alterarNomeTitular(string $nome): void
	{
		$this->validarNome($nome);
		$this->nome = $nome;
	}

	public function podeAutenticar(string $senha): bool
	{
		return $senha === 'abcd';	
	}
}