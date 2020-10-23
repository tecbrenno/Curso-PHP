<?php

 namespace Alura\Banco\Modelo;

class Pessoa
{
	private Cpf $cpf;
	protected string $nome;


	public function __construct(Cpf $cpf, string $nome)
	{
		$this->validarNome($nome);
		$this->nome = $nome;
		$this->cpf = $cpf;	
	}


	public function recuperarNome():string
	{
		return $this->nome;
	}

	public function recuperarCpf(): Cpf
	{
		return $this->cpf;
	}

	protected function validarNome(string $nome): void
	{
		if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
	}
}