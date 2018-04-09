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

	public function testSomaQuantidades()
	{
		$item = 'blusa azul';

		$estoque = new Estoque();
		$estoque->add($item, 1);
		$estoque->add($item, 5);
		$estoque->add($item, 10);

<<<<<<< HEAD
		$this->assertSame(16, $estoquel->get($item));
	}
=======
		$this->assertSame(16, $estoque->get($item));
	}

>>>>>>> aula01
}