<?php

namespace PHPTasks;

use Codeception\TestCase\Test;

class MathTest extends Test
{

	/**
	 * @var Math
	 */
	protected $math;

	public function _before()
	{
		$this->math = new Math;
	}

	/**
	 * @dataProvider addNumbersProvider
	 */
	public function testAddNumbers($a, $b, $expected)
	{
		$this->assertEquals(
			$expected,
			$this->math->addNumbers($a, $b)
		);
	}

	public function addNUmbersProvider()
	{
		return [
			[1, 1, 2],
			[2, 3, 5],
			[125, 100, 225],
			[-1, 1, 0],
			[-100, 200, 100],
		];
	}
}

