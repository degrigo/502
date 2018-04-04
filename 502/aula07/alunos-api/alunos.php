<?php

class Alunos
{
	private $con;

	public function __construct()
	{
		$this->con = new PDO('pgsql:host=localhost;dbname=aula06', 'aula06', 'aula06');
	}

	public function all()
	{
		$stmt = $this->con->query("SELECT * FROM tb_alunos ORDER BY id");
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}