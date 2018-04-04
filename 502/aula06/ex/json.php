<?php 

$con = new PDO('pgsql:host=localhost;dbname=aula06','aula06','aula06');

$stmt = $con->query("SELECT * FROM tb_alunos");
$stmt->execute();
$pessoas = $stmt->fetchAll(PDO::FETCH_ASSOC);

$json = json_encode($pessoas);
// $json = json_decode($pessoas);

file_put_contents('pessoas.json',$json );

header('Content-type: text/json');

echo $json;