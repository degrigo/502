<?php 

$con = new PDO('pgsql:host=localhost;dbname=aula06','aula06','aula06');

$stmt = $con->query("SELECT * FROM tb_alunos");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$xml = new DOMDocument();
$xml->loadXML('<?xml version="1.0" encoding="UTF-8"?><pessoas></pessoas>');

$pessoas = $xml->getElementsByTagName('pessoas');

foreach ($result as $pessoa) {
	$pessoaItem = $xml->createElement('pessoa');
	$idItem = $xml->createElement('id',$pessoa['id']);
	$nomeItem = $xml->createElement('nome',$pessoa['nome']);
	$emailItem = $xml->createElement('email',$pessoa['email']);
	$pessoaItem->appendChild($idItem);
	$pessoaItem->appendChild($nomeItem);
	$pessoaItem->appendChild($emailItem);

	$pessoas->item(0)->appendChild( $pessoaItem);
}

$xml->save('dom-pessoas.xml');

header('Content-type: text/xml');

echo $xml->saveXML();