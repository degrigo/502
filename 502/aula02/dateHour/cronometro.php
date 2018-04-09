<?php

function cronometro()
{
	// true retorna em formado de decimal
	return microtime(true);
}

$start = cronometro();

$array = [];

for ($i=0; $i < 1000000 ; $i++) { 
	$array[] = pow($i, 2);
}

$end = cronometro();

echo "Gastou = " . ($end - $start) . " segundos";

echo "<hr>";