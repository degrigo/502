<?php

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

// Localizando elemento
$apostilas = $dom->getElementsByTagName('apostila');

// Removendo atributos
$apostilas->item(0)->removeAttribute('versao');

// Salvando Atributo
$dom->save('../apostilas.xml');

// Altero o tipo de visualização
header('Content-type: text/xml');

// exibo o xml
echo $dom->saveXML();

