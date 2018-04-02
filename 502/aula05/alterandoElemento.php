<?php

// alterando título do XML através do php

//  O Objeto cria um array com manipualação de dados através de strings

$apostilas = new SimpleXMLElement('apostilas.xml', null, true);

$apostilas->apostila[0]->titulo = 'Dominando PHP';
$apostilas->apostila[1]->titulo = 'Testando PHP';
$apostilas->apostila[2]->titulo = 'Lendo PHP';
$apostilas->apostila[2]->topicos->topico[0] = 'Mudando tópico 1';

$apostilas->saveXML('apostilas.xml');

header('Content-type: text/xml');

echo $apostilas->asXML();