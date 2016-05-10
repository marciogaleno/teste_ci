<?php

use PHPUnit_Framework_TestCase as PHPUnit;
use \Application\NativeElements\Math;

class PHPNativeElements extends PHPUnit
{
	protected $math;

	public function setUp()
	{
		$this->math = new Math();
	}

	public function testOperacaoMatematica()
	{
		$this->assertEquals(3, $this->math->sum(1, 2), 'Soma errada!');
	}

	public function tearDown()
	{
		
	}

}