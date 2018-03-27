<?php

class Estoque
{
	private $itens = [];

	public function add($item, $quantidade)
	{
		$this->itens[$item] = $quantidade;
	}

	public function get($item)
	{
		return $this->itens[$item];
	}
}