<?php

// ^ começo de string
// $ final de string

$cpf = "111.222.333-44";

$regex = '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/';

echo "CPF: ";

if (preg_match($regex, $cpf)) {
	echo "Válido";
} else {
	echo "Inválido";
}

echo "<hr>";

$placa = "AAA-1234";

$regex = '/^[A-Z]{3}\-[0-9]{4}$/';

echo "placa: ";

if (preg_match($regex, $placa)) {
	echo "Placa Válida";
} else {
	echo "Placa Inválida";
}

echo "<hr>";

$cnpj = "22.608.568/0001-22";

$regex = '/^[0-9]{2}\.[0-9]{3}\.[0-9]{3}\/[0-9]{4}\-[0-9]{2}$/';

echo "Cnpj: ";

if (preg_match($regex, $cnpj)) {
	echo "CNPJ Válido";
} else {
	echo "CNPJ Inválido";
}