<?php

class Estoque
{
	private $itens = [];

	public function add($item, $quantidade)
	{
		// verifica se o índice está setado no array isset
		// fez o looping passando retorno, adicionando a quantidade ao item
		// pegou resultado do 1 ($this->itens[$item] = $quantidade)
		// passa pelo if novamente e incrementa o valor no looping
		if (isset($this->itens[$item])){
			$quantidade += $this->itens[$item];
		}
		$this->itens[$item] = $quantidade;
	}

	public function get($item)
	{
		if(isset($this->itens[$item])){
			return $this->itens[$item];
		}
		throw new Exception("Error Processing Request", 1);
						
	}
}