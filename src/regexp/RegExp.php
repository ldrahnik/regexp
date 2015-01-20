<?php

namespace regexp;

/**
 * Regular expression.
 *
 * Author Lukáš Drahník <L.Drahnik@gmail.com>
 * @package regexp
 */
class Regexp
{

	/** @var array */
	public $regulars = array();

	/**
	 * @param $regulars
	 */
	public function __construct($regulars)
	{
		$this->regulars = $regulars;
	}

	/**
	 * Insert regular expression if not exist or throw exception.
	 * @param $name
	 * @param $reg
	 */
	public function setRegularExpression($name, $reg)
	{
		if(array_key_exists($name, $this->regulars)) {
			throw new RegularExpressionAlreadyDefined("Regular expression '{$name}' has been already defined.");
		} else {
			$this->regulars[$name] = $reg;
		}
	}

	/**
	 * Return regular expression of $name.
	 * @param $name
	 * @return string
	 */
	public function getRegularExpression($name)
	{
		if(!array_key_exists($name, $this->regulars)) {
			throw new RegularExpressionNotFound("Regular expression '{$name}' not found.");
		} else {
			return $this->regulars[$name];
		}
	}
}