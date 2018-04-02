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

$apostilas = new SimpleXMLElement($xml);

echo "<pre>";
print_r($apostilas);