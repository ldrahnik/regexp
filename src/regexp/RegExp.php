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

	/**
	 * @var array
	 */
	public $regulars = array();

	/**
	 * @param $regulars
	 */
	public function __construct($regulars)
	{
		$this->regulars = $regulars;
	}

	/**
	 * Return regular expression of $name.
	 *
	 * @param $name
	 *
	 * @throws MemberAccessException if the regular is not defined.
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

	/**
	 * Allows the user to access through magic methods to protected and public properties.
	 * There is get<name>() for every regular expression.
	 *
	 * @param string $name method name
	 * @param array $args arguments
	 *
	 * @throws MemberAccessException
	 * @return string
	 */
	public function __call($name, $args)
	{
		if (strlen($name) > 3) {

			$op = substr($name, 0, 3);
			$prop = strtolower($name[3]) . substr($name, 4);

			if ($op === 'get' && isset($this->regulars[$prop])) {
				return $this->$prop;
			}
		} else if ($name === '') {
			throw MemberAccessException::callWithoutName($this);
		}

		throw MemberAccessException::undefinedMethodCall($this, $name);
	}

	/**
	 * Return regular expression of $name. Do not call directly.
	 *
	 * @param string $name regular name
	 *
	 * @throws RegularExpressionNotFound if the regular is not defined.
	 * @return string
	 */
	public function &__get($name)
	{
		if ($name === '') {
			throw new RegularExpressionNotFound("Regular expression '{$name}' not found.");
		}

		if(isset($this->regulars[$name])) {
			return $this->regulars[$name];
		}

		throw new RegularExpressionNotFound("Regular expression '{$name}' not found.");
	}
}