<?php

namespace PHPTasks;

/**
 * Responsible for dispatching commands and printing out the result
 *
 * @package PHPTasks
 */
class Commander
{

	/**
	 * Runs the given command.
	 *
	 * @param string $command
	 *
	 * @return string
	 */
	public function run($command)
	{
		switch (strtolower($command))
		{
			case 'welcome':
				$output = $this->welcome();
				break;
			case 'bye':
				$output = $this->bye();
				break;
			case 'sheep':
				$output = $this->sheep();
				break;
			case 'help':
			default:
				$output = $this->help();
		}

		return $output;
	}

	/**
	 * Says hello.
	 *
	 * @return string
	 */
	protected function welcome()
	{
		return 'Hello, user!';
	}

	/**
	 * Says bye.
	 *
	 * @return string
	 */
	protected function bye()
	{
		return 'Goodbye.';
	}

	/**
	 * Returns a sheep
	 *
	 * @return string
	 */
	protected function sheep()
	{
		return "  ,-''''-.
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
      /_)                  /_)";
	}

	/**
	 * Shows help information
	 *
	 * @return string
	 */
	protected function help()
	{
		return "Available commands:

 - welcome : Bids the user welcome
 - bye     : Bids the user goodbye
 - sheep   : Shows a cute sheep
 - help    : Shows this dialog
";
	}

}

