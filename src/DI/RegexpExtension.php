<?php

namespace Regexp\DI;

use Nette\DI\CompilerExtension;

/**
 * Class RegexpExtension
 *
 * @author Lukáš Drahník (http://drahnik-lukas.com/)
 * @package ldrahnik\Regexp
 */
class RegexpExtension extends CompilerExtension
{

	/**
	 * Embedded common regular expressions.
	 */
	private $defaults = array(
		'username' => '^[a-z0-9_-]{3,16}$',
		'twitterUsername' =>  '^(\@)?[A-Za-z0-9_]+$',
		'password' => '^[a-z0-9_-]{6,18}$',
		'facebook' => '^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]',
		'google' => '((http|https):\/\/)?(www[.])?plus\.google\.com\/.?\/?.?\/?([0-9]*)'
	);

	public function loadConfiguration()
	{
		$config = $this->getConfig($this->defaults);
		$builder = $this->getContainerBuilder();

		$builder->addDefinition($this->prefix('regexp'))
			->setClass('Regexp\Regexp',
				array($config)
			);
	}
}