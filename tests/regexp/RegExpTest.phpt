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
class RegExpTest extends Tester\TestCase
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

	function testServiceConfiguration()
	{
		Assert::type('regexp\Regexp', $this->regexpServices);
	}

	function testMyRegular()
	{
		Assert::match($this->regexpServices->regulars['username'], '^[a-z0-9_-]{3,16}$');
	}

	function testEmbeddedRegular()
	{
		Assert::match($this->regexpServices->regulars['twitterUsername'], 'foo');
	}

	function testOverrideRegular()
	{
		Assert::match($this->regexpServices->regulars['hello'], 'foo');
	}
}

$test = new RegExpTest($container);
$test->run();
