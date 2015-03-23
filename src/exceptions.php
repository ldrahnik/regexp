<?php

namespace Regexp;

/**
 * Interface Exception
 *
 * @author Lukáš Drahník (http://drahnik-lukas.com/)
 * @package ldrahnik\Regexp
 */
interface Exception
{

}

/**
 * Class RegularExpressionNotFound
 * @package ldrahnik\Regexp
 */
class RegularExpressionNotFound extends \LogicException
{

}

/**
 * Class MemberAccessException
 * @package ldrahnik\Regexp
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
}
