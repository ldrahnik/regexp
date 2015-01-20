<?php

namespace regexp\Tests;

use Nette;
use	Tester;
use	Tester\Assert;

$container = require __DIR__ . '/bootstrap.php';

/**
 * Author Lukáš Drahník <L.Drahnik@gmail.com>
 *
 * @testCase
 */
class exceptionsTest extends Tester\TestCase
{
	/** @var \regexp\Regexp */
	private $regexpServices;

	/** @var /Container */
	private $container;

	public function __construct($container)
	{
		$this->container = $container;
	}

	protected function setUp()
	{
		$this->regexpServices = $this->container->getService('regexp.regexp');
	}

	function testAlreadyDefinedException()
	{
		$this->regexpServices->setRegularExpression('hello3', 'bar');

		$that = $this;
		Assert::exception(function() use($that) {
			$that->regexpServices->setRegularExpression('hello3', 'bar');
		}, 'regexp\RegularExpressionAlreadyDefined');
	}

	function testRegularExpressionNotFound()
	{
		$that = $this;
		Assert::exception(function() use($that) {
			$that->regexpServices->getRegularExpression('hello4');
		}, 'regexp\RegularExpressionNotFound');
	}
}

$test = new exceptionsTest($container);
$test->run();
