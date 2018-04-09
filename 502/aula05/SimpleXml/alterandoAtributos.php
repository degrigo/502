<?php

$apostilas = new SimpleXMLElement('../apostilas.xml', null, true);


$apostilas->apostila[0]->attributes()->versao = '2.0';

$apostila->apostila[1]->attributes();

$apostilas->saveXML('../apostilas.xml');

header('Content-type: text/xml');

echo $apostilas->asXML();