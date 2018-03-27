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

		$this->assertSame(16, $estoque->get($item));
	}

	// anotation
	// Recurso do PHPUnit que retorna uma excessão 
	/**
	 * @expectedException InvalidArgumentException
	 * @expectedExceptionMessage Item não existe no estoque
	 */
	public function testItemInvalido()
	{
		$estoque = new Estoque();
		$estoque->get('blusa x');
	}

}