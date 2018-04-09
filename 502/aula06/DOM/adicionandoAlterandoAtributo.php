<?php

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

// Localizando elemento
$apostilas = $dom->getElementsByTagName('apostila');

// Alterando Atributo

$apostilas->item(0)->setAttribute('versao', '2.0');

// Adicionando Atributo
$apostilas->item(0)->setAttribute('ano', '2018');

// Salvando Atributo
$dom->save('../apostilas.xml');

// Altero o tipo de visualização
header('Content-type: text/xml');

// exibo o xml
echo $dom->saveXML();

