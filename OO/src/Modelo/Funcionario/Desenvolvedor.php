<?php 

namespace Alura\Banco\Modelo\Funcionario;


class Desenvolvedor extends Funcionario
{
	public function sobeDeNivel():void
	{
		$this->receberAumento($this->recuperarSalario() * 0.75);
	}

	public function calcularBonificacao(): float
	{
		return 500.0;
	}
}