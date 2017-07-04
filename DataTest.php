<?php

use PHPUnit\Framework\TestCase;

require 'CsvFileIterator.php';

class DataTest extends TestCase
{	
	/**
	 * @dataProvider addProvider
	 */
	public function testAdd($a, $b, $expected)
	{
		$this->assertEquals($expected, $a + $b);
	}

	public function addProvider()
	{
		return new CsvFileIterator('data.csv');
	}

	public function addProviderOld()
	{
		return [
			'adding zeros'  => [0, 0, 0],
			'zero plus one' => [0, 1, 1],
			'one plus zero' => [1, 0, 1],
			'one plus one'  => [1, 1, 3]
		];
	}
}