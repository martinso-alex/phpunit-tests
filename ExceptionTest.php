<?php

use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{
	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testException()
	{
		throw new InvalidArgumentException();
		$this->expectException();
	}
}
