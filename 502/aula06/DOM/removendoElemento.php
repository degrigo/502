<?php

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

// Localizando elemento
$titulos = $dom->getElementsByTagName('titulo');

// Removendo Elemento
// parentNode localiza o pai do elemento
// removeChild remove o elemento filho
$titulos->item(0)->parentNode->removeChild($titulos->item(0));

$dom->save('../apostilas.xml');

header('Content-type: text/xml');

echo $dom->saveXML();

