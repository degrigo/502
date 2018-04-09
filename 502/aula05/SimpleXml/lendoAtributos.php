<?php

$apostilas = new SimpleXMLElement('../apostilas.xml', null, true);

echo "<pre>";

// lendo atributos

print_r($apostilas->apostila[0]->attributes());