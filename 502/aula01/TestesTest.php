<?php

// TestesTest.php

// Incluindo TestCase do PHPUnit

use PHPUnit\Framework\TestCase;

// sempre trabalhando com herança
class TestesTest extends TestCase
{
	// prefixo test
 	// testa se é idêntico
 	// ter o mesmo valor e tipo
	public function testSame()
	{
		$soma = 2 + 2;
		// assert valor e tipagem precisam ser iguais
		// chamando o método Assert para conferir o resultado
		// valor a ser testado + valor
		$this->assertSame(4, $soma);
		// imprimindo com cores o teste
		// Executar no terminal
		// phpunit --colors TestesTest.php
	}

	// Testa se é verdadeiro(somente boolean)
	// não verifica tipagem
	public function testTrue()
	{
		$verdadeiro = true;
		$this->assertTrue($verdadeiro);
	}

	// Testa se é verdadeiro(somente boolean)
	// não verifica tipagem
	public function testFalse()
	{
		$falso = false;
		$this->assertFalse($falso);
	}

	// Testa se o resultado do Count é igual
	// Count é utilizado para arrays
	public function testCount()
	{
		$array = ['a', 1, true];

		// podemos inserir vários asserts dentro de um teste 
		$count = count($array);
		$this->assertSame(3,$count); // verifica se é idêntico
		$this->assertSame('a',$array[0]);
		$this->assertCount(3, $array);
	}

	// Testa se é vazio
	// array vazio
	// null
	// valor zero
	// false

	public function testEmpty()
	{
		$vazio = false;
		$this->assertEmpty($vazio);
	}

	// testa se é nulo
	public function testNull()
	{
		$nulo = null;

		$this->assertNull($nulo);
	}

	// testa se é igual mas não idêntico
	public function testEquals()
	{
		$a = "1";
		$b = 1;

		$this->assertEquals($a, $b);
	}

}