<?php 

namespace Alura\Banco\Modelo\Funcionario;

use alura\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
	public function calcularBonificacao(): float
	{
		return $this->recuperarSalario() * 2;
	}

	public function podeAutenticar(string $senha): bool
	{
		return $senha === '1234';
	}
}