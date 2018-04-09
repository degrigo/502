<?php

$apostilas = new SimpleXMLElement('../apostilas.xml', null, true);


// addChild adiciona tags no xml. 
// primeiro parâmetro é o nome da tag
// segundo parâmetro é o valor a ser inserido na tag
// $apostilas->apostila[0]->addChild('paginas', 140);
// $apostilas->apostila[1]->addChild('paginas', 240);
// $apostilas->apostila[2]->addChild('paginas', 300);


// adicionando tags dentro de uma outra tag xml
$capitulos = $apostilas->apostila[0]->addChild('capitulos');

$capitulos->addChild('capitulo', '1 - Iniciando');
$capitulos->addChild('capitulo', '2 - Aprendendo');
$capitulos->addChild('capitulo', '3 - Terminando');

$apostilas->saveXML('../apostilas.xml');

header('Content-type: text/xml');

echo $apostilas->asXML();