<?php

echo "<pre>";

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

// Localizando elemento
$titulo = $dom->getElementsByTagName('titulo');

print_r($titulo);

echo "<hr>";

// Alterando o valor

echo $titulo->item(0)->nodeValue = "PHP Enterprise";

// Salvando um arquivo
$dom->save('../apostilas.xml');

// Exibindo o resultado 
print_r($dom->saveXML());