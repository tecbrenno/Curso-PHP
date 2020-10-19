<?php 

function exibeMensagem(string $mensagem){
	echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valor): array
{
	if ($valor > 0){
		$conta['saldo'] += $valor;
	}else{
		exibeMensagem("Depósitos precisam ser positivos");
	}

	return $conta;
}

function sacar(array $conta, float $valor): array{

	if($valor > $conta['saldo'])
		exibeMensagem('Saldo insuficiente');
	else
		$conta['saldo'] -= $valor;

	return $conta;
}
