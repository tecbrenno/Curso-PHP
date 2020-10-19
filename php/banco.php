
<?php

require_once "funcoes.php";

$contaCorrente = [

	'012.345.678-79' =>	[
						'titular' => 'Brenno',
						'saldo'	  => '2000'
					],
	'798.456.412.-50' =>	[
						'titular' => 'Marcelo',
						'saldo'	  => '2200'
					],
	'015.458.792-81' =>	[
						'titular' => 'Fábio',
						'saldo'	  => '300'
					]
];

$contaCorrente['012.345.678-79'] = sacar($contaCorrente['012.345.678-79'],2001);

$contaCorrente['015.458.792-81'] = depositar($contaCorrente['015.458.792-81'],230);

foreach($contaCorrente as $cpf => $conta){
	exibeMensagem("$cpf {$conta['titular']} R$ {$conta['saldo']}");
}

