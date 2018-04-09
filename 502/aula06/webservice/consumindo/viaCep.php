<form method="POST" action="#">
	<p>CEP: </p>
	<p><input type="text" name="cep"></p>
	<p><input type="submit" name="Buscar"></p>
</form>

<?php

echo "<pre>";

if($_POST)
{
	$cep = $_POST['cep'];

	$url = "https://viacep.com.br/ws/{$cep}/json";

	// file get contents lê conteúdo web
	// só serve para pegar informações
	$retorno = file_get_contents($url);

	// retorna objeto stdClass
	$endereco = json_decode($retorno);

	// retorna uma array
	// $endereco = json_decode($retorno, true);

	// print_r($endereco);

	echo "<strong>Rua: </strong>" . $endereco->logradouro . "<br>";
}