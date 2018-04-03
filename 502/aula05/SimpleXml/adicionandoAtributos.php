<?php

$apostilas = new SimpleXMLElement('../apostilas.xml', null, true);

$apostilas->apostila[0]->attributes()->addAttribute('ano', 2018);

$apostilas->saveXML('../apostilas.xml');

header('Content-type: text/xml');

echo $apostilas->asXML();