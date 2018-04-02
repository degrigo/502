<?php

$apostilas = new SimpleXMLElement('../apostilas.xml', null, true);


// Removendo tags via unset, no qual destrói variáveis
// unset($apostilas->apostila[0]->paginas);

foreach ($apostilas as $apostila) {
	unset($apostila->pagina);
}

$apostilas->saveXML('../apostilas.xml');

header('Content-type: text/xml');

echo $apostilas->asXML();