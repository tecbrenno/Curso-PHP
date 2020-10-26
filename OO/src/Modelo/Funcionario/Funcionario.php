<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa,Cpf};


abstract class Funcionario extends Pessoa
{
	private float $salario;

	public function __construct(string $nome, Cpf $cpf, float $salario)
	{
		Parent::__construct($cpf,$nome);		
		$this->salario = $salario;
	}

	public function retornarCargo():string
	{
		return $this->cargo;
	}

	public function recuperarSalario(): float
	{
		return $this->salario;
	}

	public function receberAumento(float $valorAumento): void
	{
		if ($valorAumento < 0){
			echo "Aumento deve ser positivo";
			return;
		}
		$this->salario += $valorAumento;
	}

	abstract function calcularBonificacao(): float;
}