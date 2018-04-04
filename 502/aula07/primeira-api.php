<?php

// print_r($_SERVER['REQUEST_METHOD']);

$verbo = $_SERVER['REQUEST_METHOD'];

switch ($verbo) {
	case 'GET':
		echo 'Listando alunos';
		break;

	case 'POST':
		echo 'Criando alunos';
		break;

	case 'PUT':
		echo 'Atualizando alunos';
		break;

	case 'DELETE':
		echo 'Removendo alunos';
		break;
	
	default:
		# code...
		break;
}

