<?php

/**
 * Author Lukáš Drahník <L.Drahnik@gmail.com>
 *
 * @testCase
 */

 namespace regexp\Tests;


 use Nette,
 	Tester,
 	Tester\Assert,
    regexp\RegExp;

require __DIR__ . '/bootstrap.php';

 class RegExpTest extends Tester\TestCase
 {

 	function __construct()
 	{

 	}

	function testUsername()
	{
		Assert::match('#'.Regexp::USERNAME.'#', 'username');
	}

	 function testUrl()
	 {
		Assert::match('#'.Regexp::URL.'#', 'https://www.foo.cz');
	 }

	 function testPassword()
	 {
		 Assert::match('#'.Regexp::PASSWORD.'#', 'username');
	 }
 }

 $test = new RegExpTest();
 $test->run();
