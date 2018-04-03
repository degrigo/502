<?php

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

// Localizando o elemento apostila
$apostilas = $dom->getElementsByTagName('apostila');

// Novo Elemento
$codigo = $dom->createElement('codigo', '500');

// Adiciono novo elemento
$apostilas->item(0)->appendChild($codigo);

// Salvo meu arquivo xml
$dom->save('../apostilas.xml');

// Altero o tipo de visualização
header('Content-type: text/xml');

// exibo o xml
echo $dom->saveXML();

