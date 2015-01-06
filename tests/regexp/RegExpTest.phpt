<?php

/**
 * Author Lukáš Drahník <L.Drahnik@gmail.com>
 */

 namespace regexp\Tests;

 use Nette,
 	Tester,
 	Tester\Assert;

 $container = require __DIR__ . '/bootstrap.php';


 class ExampleTest extends Tester\TestCase
 {
 	private $container;

 	function __construct(Nette\DI\Container $container)
 	{
 		$this->container = $container;
 	}

 	function testSomething()
 	{
 		Assert::true( true );
 	}
 }


 $test = new ExampleTest($container);
 $test->run();
