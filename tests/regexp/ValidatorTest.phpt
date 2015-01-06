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
    regexp\Validator;

require __DIR__ . '/bootstrap.php';

 class ValidatorTest extends Tester\TestCase
 {

 	function __construct()
 	{

 	}

	function testUsernameMessage()
	{
		Assert::match(Validator::$messages['USERNAME'], 'Please enter a username with these characters: (a-z), number (0-9), _, - and count between 3 and 16.');
	}

	 function testUrlMessage()
	 {
		 Assert::match(Validator::$messages['URL'], 'Please enter a valid website address.');
	 }

	 function testPasswordMessage()
	 {
		 Assert::match(Validator::$messages['PASSWORD'], 'Please enter a password with there characters: (a-z), number (0-9), _, - and count between 6 and 18.');
	 }

	 function testTwitterUsernameMessage()
	 {
		 Assert::match(Validator::$messages['TWITTER_USERNAME'], 'Please enter a valid twitter username.');
	 }

	 function testFacebookMessage()
	 {
		 Assert::match(Validator::$messages['FACEBOOK'], 'Please enter a valid facebook page.');
	 }

	 function testGoogleMessage()
	 {
		 Assert::match(Validator::$messages['GOOGLE'], 'Please enter a valid google page.');
	 }
 }

 $test = new ValidatorTest();
 $test->run();
