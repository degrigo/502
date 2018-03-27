<?php

require '../Estoque/Estoque.php';

class Pedido
{
	private $item;
	private $quantidade;
	private $finalizado = false;

	public function __construct(string $item, int $quantidade)
	{
		$this->item = $item;
		$this->quantidade = $quantidade;
	}

	// TypeHint Estoque (precisa ser da classe estoque)
	public function fechar(Estoque $estoque)
	{
		// Indo no estoque, verificando se a quantidade é maior ou igual do que eu tenho em estoque
		if ($estoque->get($this->item) >= $this->quantidade) {
			$this->finalizado = true;
			$estoque->remove($this->item, $this->quantidade);
		}
	}

	public function isFinalizado()
	{
		return $this->finalizado;
	}

}