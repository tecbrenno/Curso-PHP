<?php

namespace Alura\Banco\Modelo;

class Cpf
{
	private string $cpf;

	public function __construct(string $ncpf)
	{
		$this->cpf = $ncpf;
	}

	public function retornarCpf():string
	{
		return $this->cpf;
	}
}