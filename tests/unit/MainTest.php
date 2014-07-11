<?php

namespace PHPTasks;

use Codeception\TestCase\Test;

class MainTest extends Test
{

	/** @type Commander */
	protected $commander;

	protected function _before()
	{
		$this->commander = new Commander;
	}

	/**
	 * Tests various commands
	 *
	 * @param string $command
	 * @param string $expected
	 *
	 * @dataProvider commandTestProvider
	 */
	public function testCommand($command, $expected)
	{
		$this->assertEquals(
			$expected,
			$this->commander->run($command)
		);
	}

	public function commandTestProvider()
	{
		return [
			['welcome', 'Hello, user!'],
			['bye', 'Goodbye.'],
			['sheep', "  ,-''''-.
 (.  ,.   L        ___...__
 /7} ,-`  `'-==''``        ''._
//{                           '`.
\\_,X ,                         : )
    7                          ;`
    :                  ,       /
     \\_,                \\     ;
       Y   L_    __..--':`.    L
       |  /| ````       ;  y  J
       [ j J            / / L ;
       | |Y \\          /_J  | |
       L_J/_)         /_)   L_J
      /_)                  /_)"],
			['help', "Available commands:

 - welcome : Bids the user welcome
 - bye     : Bids the user goodbye
 - sheep   : Shows a cute sheep
 - help    : Shows this dialog
"],
		];
	}
}
