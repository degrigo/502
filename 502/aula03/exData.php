<?php

echo "<pre>";

$pessoas = [
	[
		'nome' => 'Tadeu Grigolon',
		'data_nasc' => '05/05/1984'
	],
	[
		'nome' => 'Daniela Pini',
		'data_nasc' => '20/03/1980'
	],
	[
		'nome' => 'Nivaldo Grigolon',
		'data_nasc' => '06/11/1959'
	],
	[
		'nome' => 'Rejane Grigolon',
		'data_nasc' => '12/03/1954'
	]
];

echo "<hr>";

echo "<pre>";
// convertendo array para objeto dateTime
foreach ($pessoas as $key => $pessoa) {
	$pessoa['data_nasc'] = DateTime::createFromFormat(
		'd/m/Y', $pessoa['data_nasc']
		);
	$pessoas[$key] = $pessoa;
}

$novo = $pessoas[0];
// o cara mais novo tem o timestamp Unix maior
// por isso se compara o timestamp do mais velho (timestamp menor) com o do mais novo (timestamp maior)
// timestamp = 01/01/1970
foreach ($pessoas as $pessoa) {
	if($pessoa['data_nasc'] > $novo['data_nasc']){
		$novo = $pessoa;
	}
}

$velho = $pessoas[0];

foreach ($pessoas as $pessoa) {
	if($pessoa['data_nasc'] < $velho['data_nasc']){
		$velho = $pessoa;
	}
}

$intervalo = $velho['data_nasc']->diff($novo['data_nasc']);

echo "Mais novo: " . $novo['nome'];
echo "<hr>";
echo "Mais velho: " . $velho['nome'];
echo "<hr>";
echo $intervalo->format("%r%a dias de intervalo");
// print_r($pessoas);