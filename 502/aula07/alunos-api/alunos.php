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

	public function find($id)
	{
		$sql = "SELECT * FROM tb_alunos WHERE id = :id";
		$stmt = $this->con->prepare($sql);
		$stmt->bindValue(":id", $id);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

}