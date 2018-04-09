<?php 

class Alunos
{
	private $con;

	public function __construct()
	{
		$this->con = new PDO('pgsql:host=localhost;dbname=aula06','aula06','aula06');
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
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function insert(array $data)
	{
		$sql = "INSERT INTO tb_alunos(nome,email) VALUES (:nome,:email)";

		$stmt = $this->con->prepare($sql);
		$stmt->bindValue(':nome',$data['nome']);
		$stmt->bindValue(':email',$data['email']);

		return $stmt->execute();
	}

	public function update(array $data)
	{
		$sql = "UPDATE tb_alunos SET nome=:nome,email=:email WHERE id=:id";

		$stmt = $this->con->prepare($sql);
		$stmt->bindValue(':nome',$data['nome']);
		$stmt->bindValue(':email',$data['email']);
		$stmt->bindValue(':id',$data['id']);

		return $stmt->execute();
	}

	public function delete(array $data)
	{
		$sql = "DELETE FROM tb_alunos WHERE id=:id";

		$stmt = $this->con->prepare($sql);
		$stmt->bindValue(':id',$data['id']);

		return $stmt->execute();
	}
}