
<?php

$conta1 = [
	'titular' => 'Brenno',
	'saldo'	  => '2000'
];
$conta2 = [
	'titular' => 'Marcelo',
	'saldo'	  => '2200'
];
$conta3 = [
	'titular' => 'Fábio',
	'saldo'	  => '300'
];

$contaCorrente = [$conta1, $conta2, $conta3];

for ($i=0; $i<3; $i++){
	echo "Titular: ".$contaCorrente[$i]['titular']." - R$ ".$contaCorrente[$i]['saldo'].PHP_EOL;
}
