<?php

require 'alunos.php';

$alunos = new Alunos();

switch ($dados['method']) {
	case 'inserir':
		print_r($dados['params']);
		break;
	
	default:
		# code...
		break;
}