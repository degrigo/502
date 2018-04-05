<?php 

require 'alunos-api.php';

$alunos = new Alunos();

$method = $_SERVER['REQUEST_METHOD'];

$dados = file_get_contents("php://input");
$dados = json_decode($dados,true);
header('Content-type:application/json; charset=UTF-8');

switch ($method) {
	case 'GET':
		$id = isset($_GET['id']) ? $_GET['id'] : null;
		
		if ($id) {
			$result = $alunos->find($id);
		} else {
			$result = $alunos->all();	
		}

		if ($result) 
		{
			header('HTTP/1.1 200');
			echo json_encode([
					"status" => "ok",
					"data"   => $result,
					"message"=> ""
				]);
		} else 
		{
			header('HTTP/1.1 200'); // 204 No Content
			echo json_encode([
					"status" => "erro",
					"data"   => "",
					"message"=> "DAdos Não Encontrado"
				]);
		}
		
		break;

	case 'POST':	

		$result = $alunos->insert($dados);

		if ($result) {
			header('HTTP/1.1 201');
			echo json_encode([
					"status" => "ok",
					"data"   => "",
					"message"=> "Inserido Com Sucesso"
				]);
		} else {
			header('HTTP/1.1 400');
			echo json_encode([
					"status" => "erro",
					"data"   => "",
					"message"=> ""
				]);
		}
		break;

	case 'PUT':

		$result = $alunos->update($dados);

		if ($result) {
			header('HTTP/1.1 201');
			echo json_encode([
					"status" => "ok",
					"data"   => "",
					"message"=> "Inserido Com Sucesso"
				]);
		} else {
			header('HTTP/1.1 400');
			echo json_encode([
					"status" => "erro",
					"data"   => "",
					"message"=> ""
				]);
		}
		break;

	case 'DELETE':
		$result = $alunos->delete($dados);

		if ($result) {
			header('HTTP/1.1 201');			
			echo json_encode([
					"status" => "ok",
					"data"   => "",
					"message"=> "Deletado Com Sucesso"
				]);
		} else {
			header('HTTP/1.1 400');
			echo json_encode([
					"status" => "erro",
					"data"   => "",
					"message"=> ""
				]);
		}
		break;

	default:
		header('HTTP/1.1 404');
		break;
}