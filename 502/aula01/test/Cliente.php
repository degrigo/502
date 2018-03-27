<?php

class Cliente
{

	private $nome;
	private $idade;
	private $email;

	public function __construct($nome, $idade, $email)
	{
		$this->nome = $nome;
		$this->idade = $idade;
		$this->email = $email;
	}

	public function getNome()
	{		
		return $this->nome;
	}

	public function getIdade()
	{		
		return $this->idade;
	}

	public function getEmail()
	{		
		return $this->email;
	}

}