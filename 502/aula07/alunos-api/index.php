<?php

require 'alunos.php';

$alunos = new Alunos();

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
	case 'GET':
		echo json_encode($alunos->all());
		break;
	
	default:
		# code...
		break;
}