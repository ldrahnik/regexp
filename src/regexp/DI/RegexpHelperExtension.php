<?php

namespace regexp\DI;

use Nette\DI\CompilerExtension;


/**
 * Regular expressions helper extension.
 *
 * Author Lukáš Drahník <L.Drahnik@gmail.com>
 * @package regexp\DI
 */
class RegexpHelperExtension extends CompilerExtension
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

		$builder->addDefinition($this->prefix('regexpHelper'))
			->setClass('regexp\Regexp',
				array($config)
			);
	}
}