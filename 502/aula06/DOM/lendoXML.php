<?php

// lendo arquivo via heredoc

$xml = <<< 'XML'
<?xml version="1.0" encoding="UTF-8"?>
<apostilas>
	<apostila versao="1.0">
		<titulo>Dominando PHP</titulo>
		<topicos>
			<topico>Introdução</topico>
			<topico>Intermediário</topico>
			<topico>Avançado</topico>
		</topicos>
	<paginas>140</paginas><capitulos><capitulo>1 - Iniciando</capitulo><capitulo>2 - Aprendendo</capitulo><capitulo>3 - Terminando</capitulo></capitulos></apostila>	
	<apostila versao="2.0">	
		<titulo>Testando PHP</titulo>
		<topicos>
			<topico>Introdução</topico>
			<topico>Intermediário</topico>
			<topico>Avançado</topico>
		</topicos>	
	<paginas>240</paginas></apostila>	
	<apostila versao="3.0">
		<titulo>Lendo PHP</titulo>
		<topicos>
			<topico>Mudando tópico 1</topico>
			<topico>Intermediário</topico>
			<topico>Avançado</topico>
		</topicos>		
	<paginas>300</paginas></apostila>
</apostilas>
XML;

$dom = new DOMDocument();
$dom->loadXML($xml);

echo "<pre>";

print_r($dom);

echo "<hr>";
// lendo arquivo externo
$dom->load('../apostilas.xml');

print_r($dom);