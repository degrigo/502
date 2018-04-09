<?php

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

$xpath = new DOMXPath($dom);

$apostilas = $xpath->query('/apostilas/apostila[@versao=2.0]');
// $apostilas = $xpath->query('/apostilas/apostila[@versao>=0.7]');
// $apostilas = $xpath->query('/apostilas/apostila');

echo "<pre>";

print_r($apostilas->item(0));

echo "<hr>";