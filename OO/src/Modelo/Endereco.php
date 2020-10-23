<?php

namespace Alura\Banco\Modelo;

class Endereco
{
	private string $rua;
	private string $bairro;
	private string $cidade;
	private string $numero;

	public function __construct(string $rua, string $bairro, string $cidade, string $numero)
	{
		$this->rua = $rua;
		$this->bairro = $bairro;
		$this->cidade = $cidade;
		$this->numero = $numero;
	}

	public function retornarRua():string
	{
		return $this->rua;
	}

	public function retornarBairro():string
	{
		return $this->bairro;
	}

	public function retornarCidade():string
	{
		return $this->cidade;
	}

	public function retornarNumero():string
	{
		return $this->numero;
	}

}