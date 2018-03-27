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
		// Criando estoque
		$estoque = new Estoque();
		// Quando busco item que não existe no estoque
		// esperamos um retorno da mensagem do anotation acima.
		$estoque->get('blusa x');
	}

	// Teste que remove quantidade
	public function testRemoveItem()
	{
		// Crio item
		$item = 'blusa Y';
		$estoque = new Estoque();
		// Adiciono no estoque
		$estoque->add($item, 10);
		$estoque->add($item, 3);
		$estoque->add($item, 8);
		// Removo item do estoque
		$estoque->remove($item, 15);

		// Resultado esperado do teste
		$this->assertSame(6, $estoque->get($item));
	}

}