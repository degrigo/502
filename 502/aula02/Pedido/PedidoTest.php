<?php

require_once "Pedido.php";

use PHPUnit\Framework\TestCase;

class PedidoTest extends TestCase
{
	private $estoque;

	// Criando estoque e adicionando dois itens com estoques diferentes
	public function setUp()
	{
		$this->estoque = $this->getMockBuilder('Estoque')->getMock();
	}

	public function testDeveFecharPedido()
	{
		$item = "Blusa X";
		$quantidade = 10;

		$this->estoque->expects($this->once())
				->method("get")
				// with - parametros que eu quero passar
				->with($this->equalTo($item))
				// will - parametros a serem retornados
				->will($this->returnValue($quantidade));

		$this->estoque->expects($this->once())
				->method("remove")
				->with(
						$this->equalTo($item),
						$this->equalTo($quantidade)
					);

		$pedido = new Pedido($item, $quantidade);
		$pedido->fechar($this->estoque);

		$this->assertTrue($pedido->isFinalizado());
	}

	public function testNaoDeveFecharPedido()
	{
		$item = "Blusa Y";
		$quantidade = 7;
		// se retornar 0, nunca executar o método remove do estoque
		$this->estoque->expects($this->once())
				->method("get")
				->with($this->equalTo($item))
				->will($this->returnValue(0));

		$this->estoque->expects($this->never())
				->method("remove");

		$pedido = new Pedido($item, $quantidade);
		$pedido->fechar($this->estoque);

		// Verificando se o pedido está retornando false por não estar finalizado.
		$this->assertFalse($pedido->isFinalizado());

	}


}