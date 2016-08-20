<?php


use PHPUnit_Framework_TestCase as PHPUnit;
use \Application\Fiscalizacao\ValidaPlaca;


class validaPlacaTest extends PHPUnit
{
	private $validaPlaca;

	public function setUp()
	{
		$this->validaPlaca = new ValidaPlaca();
	}

	public function testValidacaoPlaca1e2()
	{	
		// Teste para casos falsos
		$this->assertFalse($this->validaPlaca->podeCircularNoRodizio("ABC-431", ['segunda']));
		$this->assertFalse($this->validaPlaca->podeCircularNoRodizio("ABC-432", ['segunda']));

		// Teste para casos verdadeiros
		$this->assertTrue($this->validaPlaca->podeCircularNoRodizio("ABC-431", ['terca', 'quarta', 'quinta', 'sexta']));
		$this->assertTrue($this->validaPlaca->podeCircularNoRodizio("ABC-432", ['terca', 'quarta', 'quinta', 'sexta']));
	}

	public function testValidacaoPlaca3e4()
	{	
		// Teste para casos falsos
		$this->assertFalse($this->validaPlaca->podeCircularNoRodizio("ABC-433", ['terca']));
		$this->assertFalse($this->validaPlaca->podeCircularNoRodizio("ABC-433", ['terca']));

		// Teste para casos verdadeiros
		$this->assertTrue($this->validaPlaca->podeCircularNoRodizio("ABC-434", ['segunda', 'quarta', 'quinta', 'sexta']));
		$this->assertTrue($this->validaPlaca->podeCircularNoRodizio("ABC-434", ['segunda', 'quarta', 'quinta', 'sexta']));
	}

	public function testValidacaoPlaca5e6()
	{	
		// Teste para casos falsos
		$this->assertFalse($this->validaPlaca->podeCircularNoRodizio("ABC-435", ['quarta']));
		$this->assertFalse($this->validaPlaca->podeCircularNoRodizio("ABC-435", ['quarta']));

		// Teste para casos verdadeiros
		$this->assertTrue($this->validaPlaca->podeCircularNoRodizio("ABC-436", ['segunda', 'terca', 'quinta', 'sexta']));
		$this->assertTrue($this->validaPlaca->podeCircularNoRodizio("ABC-436", ['segunda', 'terca', 'quinta', 'sexta']));
	}

	public function testValidacaoPlaca7e8()
	{	
		// Teste para casos falsos
		$this->assertFalse($this->validaPlaca->podeCircularNoRodizio("ABC-437", ['quinta']));
		$this->assertFalse($this->validaPlaca->podeCircularNoRodizio("ABC-437", ['quinta']));

		// Teste para casos verdadeiros
		$this->assertTrue($this->validaPlaca->podeCircularNoRodizio("ABC-438", ['segunda', 'terca', 'quarta','sexta']));		
		$this->assertTrue($this->validaPlaca->podeCircularNoRodizio("ABC-438", ['segunda', 'terca', 'quarta', 'sexta']));
	}

	public function testValidacaoPlaca9e0()
	{	
		// Teste para casos falsos
		$this->assertFalse($this->validaPlaca->podeCircularNoRodizio("ABC-439", ['sexta']));
		$this->assertFalse($this->validaPlaca->podeCircularNoRodizio("ABC-439", ['sexta']));
		
		// Teste para casos verdadeiros
		$this->assertTrue($this->validaPlaca->podeCircularNoRodizio("ABC-430", ['segunda', 'terca', 'quarta', 'quinta']));		
		$this->assertTrue($this->validaPlaca->podeCircularNoRodizio("ABC-430", ['segunda', 'terca', 'quarta', 'quinta']));
	}


}