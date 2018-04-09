<?php

// Formato JSON

// {
// "nome" : "Daniela Pini",
// "email" : "danipini9@hotmail.com",
// "id" :  "2"
// }

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

	public function insert($dados)
	{
		$sql = "INSERT INTO tb_alunos(nome, email) VALUES (:nome, :email)";
		$stmt = $this->con->prepare($sql);
		$stmt->bindValue(":nome", $dados['nome']);
		$stmt->bindValue(":email", $dados['email']);

		return $stmt->execute();
	}

	public function update($dados)
	{
		$sql = "UPDATE tb_alunos SET nome=:nome,email=:email 
		WHERE id=:id";
		$stmt = $this->con->prepare($sql);
		$stmt->bindValue(":nome", $dados['nome']);
		$stmt->bindValue(":email", $dados['email']);
		$stmt->bindValue(":id", $dados['id']);		

		return $stmt->execute();
	}

	public function delete(array $dados)
	{
		// :id na query mostra que é um parametro
		$sql = "DELETE FROM tb_alunos WHERE id=:id";
		$stmt = $this->con->prepare($sql);
		$stmt->bindValue(":id", $dados['id']);		

		return $stmt->execute();
	}

}