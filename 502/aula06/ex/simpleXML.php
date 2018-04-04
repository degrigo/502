<?php

$con = new PDO('pgsql:host=localhost;dbname=aula06', 'aula06', 'aula06');

$stmt = $con->query("SELECT * FROM tb_alunos");
$stmt->execute();
$alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

$xml = new SimpleXmlElement('<?xml version="1.0" encoding="UTF-8"?><alunos></alunos>');

foreach ($alunos as $aluno) {
	$item = $xml->addChild('aluno');
	$item->addChild('nome', $aluno['nome']);
}

$xml->saveXML('alunos.xml');

header('Content-type: text/xml');

echo $xml->asXML();