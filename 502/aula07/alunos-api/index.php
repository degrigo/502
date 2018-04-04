<?php

require 'alunos.php';

$alunos = new Alunos();

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
	case 'GET':
		// se estiver setado o id
		$id = isset($_GET['id']) ? $_GET['id'] : null;
		if ($id) {
			$result = $alunos->find($id);
		} else {
			$result = $alunos->all();
		}

		if($result){
			// Adicionando status 200
			header('HTTP/1.1 200');
			// Adicionando tipo de conteúdo, mostrando que é um JSON
			header('Content-type:application/json; charset=UTF-8');
			echo json_encode([
					"status" 	=> "ok",
					"data" 		=>	$result,
					"message"	=>	""
				]);	
		} else {
			// Adicionando status 204 'no content'
			header('HTTP/1.1 204');
			// Adicionando tipo de conteúdo, mostrando que é um JSON
			header('Content-type:application/json; charset=UTF-8');			
		}

		break;
	case 'POST':
		// file_get_contents lê os principais verbos HTTP (GET, POST, PUT, DELETE, etc) 
		$dados = file_get_contents("php://input");
		// transformando dados a serem inseridos em array POR CONTA DO TRUE. Se não, seria convertido em objeto
		$dados = json_decode($dados, true);

		$result = $alunos->insert($dados);

		header('HTTP/1.1 201');
		// Adicionando tipo de conteúdo, mostrando que é um JSON
		header('Content-type:application/json; charset=UTF-8');
		echo json_encode([
				"status" 	=> "ok",
				"data" 		=>	$result,
				"message"	=>	""
			]);	
		break;
	default:
		# code...
		break;
}