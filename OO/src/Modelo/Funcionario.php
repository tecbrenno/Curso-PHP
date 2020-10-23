<?php

namespace Alura\Banco\Modelo;


class Funcionario extends Pessoa
{
	private string $cargo;
	private float $salario;

	public function __construct(string $nome, Cpf $cpf, string $cargo, float $salario)
	{
		Parent::__construct($cpf,$nome);
		$this->cargo = $cargo;
		$this->salario = $salario;
	}

	public function retornarCargo():string
	{
		return $this->cargo;
	}

	public function calcularBonificacao(): float
	{
		return $this->salario * 0.1;
	}

	public function recuperarSalario(): float
	{
		return $this->salario;
	}
}