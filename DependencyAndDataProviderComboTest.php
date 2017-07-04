<?php

use PHPUnit\Framework\TestCase;

class DependencyAndDataProviderComboTest extends TestCase
{
	public function provider()
	{
		return [['provider1'], ['provider2']];
	}

	public function testProducerFirst()
	{
		$this->assertTrue(true);
		return 'first';
	}

	public function testProducerSecond()
	{
		$this->assertTrue(true);
		return 'second';
	}

	/**
	 * @depends testProducerFirst
	 * @depends testProducerSecond
	 * @dataProvider provider
	 */
	public function testConsumer()
	{		
		$this->assertCount(3, func_get_args());
		$arguments = func_get_args();
		switch ($arguments[0]) {
			case 'provider1':
				$this->assertEquals('provider1', $arguments[0]);
				break;
			
			case 'provider2':
				$this->assertEquals('provider2', $arguments[0]);
				break;

			default:
				$this->assertTrue(false);
				break;
		}

		$this->assertEquals('first', $arguments[1]);
		$this->assertEquals('second', $arguments[2]);
	}
}