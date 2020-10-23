<?php 

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
	private Titular $titular;
	protected float $saldo;
	private static $numeroDeContas = 0;

	
	public function __construct(Titular $novo)
	{
		$this->titular = $novo;
		$this->saldo = 0;

		self::$numeroDeContas++;
	}

	public function __destruct()
	{
		self::$numeroDeContas--;
	}

	public function sacar(float $valorASacar): void
	{
		$tarifaSaque = $valorASacar * $this->percentualTarifa();
		$valorSaque = $valorASacar + $tarifaSaque;

		if($valorSaque > $this->saldo){
			echo "Saldo insuficiente";
			return;
		}

		$this->saldo -= $valorSaque;
	}

	public function depositar(float $valorADepositar): void
	{
		if($valorADepositar < 0){
			echo "Valor deverá ser positivo";
			return;
		}

		$this->saldo += $valorADepositar;
	}

	public function recuperarSaldo(): float
	{
		return $this->saldo;
	}

	public static function retornarNumContas():int
	{
		return self::$numeroDeContas;
	}

	public function recuperarNomeTitular(): string
	{
		return $this->titular->recuperarNome();
	}

	public function recuperarCpfTitular(): string
	{
		return $this->titular->recuperarCpf();
	}

	abstract protected function percentualTarifa(): float;

}