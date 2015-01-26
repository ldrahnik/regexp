<?php

namespace regexp;


/**
 * Class Exceptions
 * @package regexp
 */
interface Exception
{

}

/**
 * Author Lukáš Drahník <L.Drahnik@gmail.com>
 */
class RegularExpressionNotFound extends \LogicException
{

}

/**
 * Author Lukáš Drahník <L.Drahnik@gmail.com>
 */
class MemberAccessException extends \LogicException implements Exception
{
	/**
	 * @param string|object $class
	 *
	 * @return MemberAccessException
	 */
	public static function callWithoutName($class)
	{
		$class = is_object($class) ? get_class($class) : $class;

		return new static("Call to class '$class' method without name.");
	}
	
	/**
	 * @param object|string $class
	 * @param string $method
	 *
	 * @return MemberAccessException
	 */
	public static function undefinedMethodCall($class, $method)
	{
		$class = is_object($class) ? get_class($class) : $class;

		return new static("Call to undefined method $class::$method().");
	}

	/**
	 * @param string|object $class
	 *
	 * @return MemberAccessException
	 */
	public static function propertyWriteWithoutName($class)
	{
		$class = is_object($class) ? get_class($class) : $class;

		return new static("Cannot write to a class '$class' property without name.");
	}
}
