<form method="POST" action="#">
	<p>CEP: </p>
	<p><input type="text" name="cep"></p>
	<p><input type="submit" name="Buscar"></p>
</form>

<?php

if($_POST)
{
	$cep = $_POST['cep'];

	$url = "https://viacep.com.br/ws/{$cep}/json";

	$curl = curl_init();

	curl_setopt($curl, CURLOPT_URL, $url);

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$retorno = curl_exec($curl);

	curl_close($curl);

	$endereco = json_decode($retorno);

	echo "<strong>Rua: </strong>" . $endereco->logradouro . "<br>";
}
