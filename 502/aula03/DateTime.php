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