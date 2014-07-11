Basic Tasks
===========

The aim of this branch is to learn about a practical use of the "repository" design patten.

## Getting started

1. Run a composer update
2. Run `vendor/bin/codecept run unit`
3. Write the code and stop the tests from failing!

If you want to run a single test you can use `vendor/bin/codecept run unit path/to/test/file.php`. This expects the path
to be from the `tests/unit/` folder so this does not need to be specified. Eg: `vendor/bin/codecept run unit MathTest.php`
will run just the tests contained in `tests/unit/MathTest.php`.

## The Code

`bin/index.php` is the main entry point for the program.
It collects user input, calls the command processor and shows the result.

`src/Commander.php` contains the main logic. Each command is a separate function and are called by the `run` function.

## The goal

The goal of the exercise is to convert the `Commander` class to remove the switch statement, making use of the "repository"
pattern.

### Things to consider

 - The `Commander` class should not contain the logic of the individual commands.
 - The `Commander` can contain a list of commands that it knows about.
 - Commands can be registered in `bin/index.php`.

## Extra Credit

 - [ ] Update the work you have done previously to allow extra arguments to be passed to each command when it is run.
 - [ ] Update the help command to automatically generate the list of tasks and descriptions.
