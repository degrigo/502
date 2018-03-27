<?php

require_once "Estoque.php";

use PHPUnit\Framework\TestCase;

class EstoqueTest extends TestCase
{

	public function testAddItem()
	{

		$item = 'blusa azul';
		$quantidade = 5;

		$estoque = new Estoque();
		$estoque->add($item, $quantidade);

		$this->assertSame($quantidade, $estoque->get($item));

	}

}