<?php

require_once "Estoque.php";

use PHPUnit\Framework\TestCase;

class EstoqueTest extends TestCase
{
	private $estoque;

	//Toda vez antes de iniciar o teste, instanciamos o estoque
	 // Sempre é executado antes de iniciar o teste 
	public function setUp()
	{
		$this->estoque = new Estoque();
	}

	public function testAddItem()
	{

		$item = 'blusa azul';
		$quantidade = 5;

		$this->estoque;
		$this->estoque->add($item, $quantidade);

		$this->assertSame($quantidade, $this->estoque->get($item));

	}

	public function testSomaQuantidades()
	{
		$item = 'blusa azul';

		$this->estoque;
		$this->estoque->add($item, 1);
		$this->estoque->add($item, 5);
		$this->estoque->add($item, 10);

		$this->assertSame(16, $this->estoque->get($item));
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
		// Quando busco item que não existe no estoque
		// esperamos um retorno da mensagem do anotation acima.
		$this->estoque->get('blusa x');
	}

	// Teste que remove quantidade
	public function testRemoveItem()
	{
		// Crio item
		$item = 'blusa Y';
		// Adiciono no estoque
		$this->estoque->add($item, 10);
		$this->estoque->add($item, 3);
		$this->estoque->add($item, 8);
		// Removo item do estoque
		$this->estoque->remove($item, 15);

		// Resultado esperado do teste
		$this->assertSame(6, $this->estoque->get($item));
	}

}