<?php

require_once "Cliente.php";

use PHPUnit\Framework\TestCase;

class ClienteTest extends TestCase
{

	public function testNovoCliente()
	{
		$cliente = new Cliente("Tadeu Grigolon", 34, 'degrigo@gmail.com');
		$this->assertSame("Tadeu Grigolon", $cliente->getNome());
		$this->assertSame(34, $cliente->getIdade());
		$this->assertSame('degrigo@gmail.com', $cliente->getEmail());
	}

}