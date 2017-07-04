<?php

use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase
{
	public function testExpectedFooActualFoo()
	{
		$this->expectOutputString('foo');
		print 'foo';
	}

	public function testExpectedBarActualBaz()
	{
		$this->expectOutputString('bar');
		print 'baz';
	}
}