<?php

// Utilizando Heredoc para imprimir XML em forma de string

$xml = <<< 'XML'
<?xml version="1.0" encoding="UTF-8"?>
<apostilas>
	<apostila versao="1.0">
		<titulo>PHP</titulo>
		<topicos>
			<topico>Introdução</topico>
			<topico>Intermediário</topico>
			<topico>Avançado</topico>
		</topicos>
	</apostila>	
	<apostila versao="1.0">		
	</apostila>	
	<apostila versao="2.0">		
	</apostila>
</apostilas>
XML;

// Objeto SimpleXMLElement imprime o valor da string contendo XML.

// $apostilas = new SimpleXMLElement($xml);

// pegando o xml de arquivo externo
// 1º String data
// 2º passar como nulo
// 3º carrega um arquivo caso a consulta externa for verdadeira
// $apostilas = new SimpleXMLElement('../apostilas.xml', null, true);

// função nativa do php

$apostilas = simplexml_load_file('../apostilas.xml');

echo "<pre>";
print_r($apostilas);