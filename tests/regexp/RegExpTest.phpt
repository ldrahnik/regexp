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

	function testTwitterUsername()
	{
		Assert::match('#'.Regexp::TWITTER_USERNAME.'#', '@ldrahnik');
	}

	function testFacebook()
	{
		Assert::match('#'.Regexp::FACEBOOK.'#', 'https://www.facebook.com/foo-profile');
	}

	function testGoogle()
	{
		Assert::match('#'.Regexp::GOOGLE.'#', 'https://plus.google.com/u/0/117582428302844646322/posts');
	}
}

$test = new RegExpTest();
$test->run();
