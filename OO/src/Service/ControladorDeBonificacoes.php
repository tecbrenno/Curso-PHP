<?php

namespace Alura\Banco\Service;
use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{

	private $totalBonificacoes = 0;

	public function adicionarBonificacao(Funcionario $funcionario)
	{
		$this->totalBonificacoes += $funcionario->calcularBonificacao();
	}

	public function recuperarTotBonificao(): float
	{
		return $this->totalBonificacoes;
	}
}