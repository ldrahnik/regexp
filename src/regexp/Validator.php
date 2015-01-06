<?php

namespace regexp;

/**
 * Common regular expressions error messages.
 *
 * Author Lukáš Drahník <L.Drahnik@gmail.com>
 */
class Validator {

	/** @var array */
	public static $messages = array(
		'USERNAME' => 'Please enter a username with these characters: (a-z), number (0-9), _, - and count between 3 and 16.',
		'TWITTER_USERNAME' => 'Please enter a valid twitter username.',
		'PASSWORD' => 'Please enter a password with there characters: (a-z), number (0-9), _, - and count between 6 and 18.',
		'URL' => 'Please enter a valid website address.',
		'FACEBOOK' => 'Please enter a valid facebook page.',
		'GOOGLE' => 'Please enter a valid google page.'
	);
}