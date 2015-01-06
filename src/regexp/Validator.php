<?php

/**
 * Common regular expressions error messages.
 *
 * Author Lukáš Drahník <L.Drahnik@gmail.com>
 */
class Validator {

	/** @var array */
	public static $messages = array(
		Regexp::USERNAME => 'Please enter a username with these characters: (a-z), number (0-9), _, - and count between 3 and 16.',
		Regexp::EMAIL => 'Please enter a valid email address.',
		Regexp::PASSWORD => 'Please enter a password with there characters: (a-z), number (0-9), _, - and count between 6 and 18.',
		Regexp::URL => 'Please enter a valid website address.',
	);
}