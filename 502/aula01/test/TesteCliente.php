<?php

require_once "Cliente.php";

use PHPUnit\Framework\TestCase;

class ClienteTest extends TestCase
{

	public function testNovoCliente()
	{
		$cliente = new Cliente("Tadeu Grigolon");
		$this->assertSame("Tadeu Grigolon", $cliente->getNome());
	}

}