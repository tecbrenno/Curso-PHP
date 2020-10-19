
<?php

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

$contaCorrente['0554654212'] = [
		'titular' => 'Pedro',
		'saldo'	  => '541'
	];

foreach($contaCorrente as $cpf => $conta){
	echo $cpf." --------- R$ ".$conta['saldo'].PHP_EOL;
}