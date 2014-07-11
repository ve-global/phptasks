Basic Tasks
===========

The aim of this branch is to refactor the code to remove the huge switch statement.

## Getting started

1. Run a composer update
2. Run `vendor/bin/codecept run unit`
3. Write the code and stop the tests from failing!

If you want to run a single test you can use `vendor/bin/codecept run unit path/to/test/file.php`. This expects the path
to be from the `tests/unit/` folder so this does not need to be specified. Eg: `vendor/bin/codecept run unit MathTest.php`
will run just the tests contained in `tests/unit/MathTest.php`.
