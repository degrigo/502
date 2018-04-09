<?php

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

// Localizando elemento
$apostilas = $dom->getElementsByTagName('apostila');

// Exibindo valor dos atributos
echo $apostilas->item(0)->getAttribute('versao');
