<?php

namespace Regexp\Tests;

use Nette;
use	Tester;
use	Tester\Assert;

$container = require __DIR__ . '/bootstrap.php';

/**
 * Class RegexpTest
 *
 * @author Lukáš Drahník (http://drahnik-lukas.com/)
 * @package ldrahnik\Regexp\Tests
 *
 * @testCase
 */
class RegexpTest extends Tester\TestCase
{
	/** @var \Regexp\Regexp */
	private $regexpServices;

	/** @var /Container */
	private $container;

	public function __construct($container)
	{
		$this->container = $container;
	}

	protected function setUp()
	{
		$this->regexpServices = $this->container->getService('regexp.Regexp');
	}

	function testServiceConfiguration()
	{
		Assert::type('Regexp\Regexp', $this->regexpServices);
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

	function testGetRegularExpression()
	{
		Assert::match($this->regexpServices->getRegularExpression('hello'), 'foo');
	}

	function testGetRegularExpressionMagic()
	{
		Assert::match($this->regexpServices->getHello(), 'foo');
	}
}

$test = new RegexpTest($container);
$test->run();
