<?php

echo "<pre>";

print_r((new DateTime()));

echo "<hr>";

print_r((new DateTime('1993-07-25')));

echo "<hr>";

print_r((new DateTime('+1 month')));

echo "<hr>";

echo (new DateTime('+1 month'))->format('d/m/Y H:i:s');

echo "<hr>";

$data = new DateTime();
$data->modify('+1 year 2 months 3 days 10 hours 3 minutes 40 seconds');
echo $data->format('d/m/Y H:i:s');

echo "<hr>";

$data->setDate(2000, 1, 20);
echo $data->format('d/m/Y H:i:s');

echo "<hr>";

$data->setTime(13, 10, 55);
echo $data->format('d/m/Y H:i:s');

echo "<hr>";

$fuso = new DateTimeZone('America/New_York');
$data = new DateTime();
echo $data->format('d/m/Y H:i:s');
echo "<br>";
$data->setTimeZone($fuso);
echo $data->format('d/m/Y H:i:s');

echo "<hr>";

$fuso = new DateTimeZone('Europe/Rome');
$data = new DateTime();
echo $data->format('d/m/Y H:i:s');
echo "<br>";
$data->setTimeZone($fuso);
echo $data->format('d/m/Y H:i:s');

echo "<hr>";

$intervalo = new DateInterval('P10DT3H40M');
echo $intervalo->format("%D dias e %H horas e %I minutos de intervalo");

echo "<hr>";

$dataAtual = new DateTime();
$dataNasc = new DateTime('1984-05-05');
$intervalo = $dataNasc->diff($dataAtual);

echo $dataAtual->format('d/m/Y');
echo "<br>";
echo $dataNasc->format('d/m/Y');
echo "<br>";
echo $intervalo->format("%a dias de intervalo");

echo "<hr>";

$dataAtual = new DateTime();
$dataNasc = new DateTime('1984-05-05');
$intervalo = $dataAtual->diff($dataNasc);

echo $dataAtual->format('d/m/Y');
echo "<br>";
echo $dataNasc->format('d/m/Y');
echo "<br>";
echo $intervalo->format("%r %a dias de intervalo");

echo "<hr>";

var_dump($dataNasc > $dataAtual);
var_dump($dataNasc == $dataAtual);
var_dump($dataNasc < $dataAtual);
var_dump($dataNasc != $dataAtual);

echo "<hr>";

$data = new DateTime('2018-03-28');

var_dump($data > $dataAtual);
var_dump($data == $dataAtual);
var_dump($data < $dataAtual);
var_dump($data != $dataAtual);

echo "<hr>";

print_r($data);
$data->add(new DateInterval('P4D'));
print_r($data);

echo "<hr>";

print_r($data);
$data->sub(new DateInterval('P7D'));
print_r($data);

echo "<hr>";

date_default_timezone_set('America/Sao_Paulo');
$dataSP = new DateTime();
echo $dataSP->format('d/m/Y H:i:s');

echo "<br>";

date_default_timezone_set('Asia/Tokyo');
$dataSP = new DateTime();
echo $dataSP->format('d/m/Y H:i:s');

echo "<hr>";

// mostrar data em outra língua

setlocale(LC_ALL, 'pt_BR.utf8');
echo strftime("%A, %e de %B de %Y");