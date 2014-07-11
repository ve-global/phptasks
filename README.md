Basic Tasks
===========

This branch contains a number of tasks relating to various PHP language features. The aim is to get all the tests to
pass by filling out the empty methods to satisfy the unit tests.

## Getting started

1. Run a composer install
2. Run `vendor/bin/codecept run unit`
3. Write the code and stop the tests from failing!

If you want to run a single test you can use `vendor/bin/codecept run unit path/to/test/file.php`. This expects the path
to be from the `tests/unit/` folder so this does not need to be specified. Eg: `vendor/bin/codecept run unit MathTest.php`
will run just the tests contained in `tests/unit/MathTest.php`.
