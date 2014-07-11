<?php

require __DIR__.'/../vendor/autoload.php';

use \PHPTasks\Commander;

// Grab the command we are trying to run
$command = '';
if ($argc > 1)
{
	$command = $argv[1];
}

// Run the command
$processor = new Commander;
$result = $processor->run($command);

// Output the result
echo $result;
