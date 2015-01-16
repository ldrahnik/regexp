<?php

namespace regexp;

/**
 * Common regular expressions.
 *
 * Author Lukáš Drahník <L.Drahnik@gmail.com>
 */
class RegExp {

	/** validator */
	const
		USERNAME = '^[a-z0-9_-]{3,16}$',
		TWITTER_USERNAME = '^(\@)?[A-Za-z0-9_]+$',
		PASSWORD = '^[a-z0-9_-]{6,18}$',
		FACEBOOK = '^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]',
		GOOGLE = '((http|https):\/\/)?(www[.])?plus\.google\.com\/.?\/?.?\/?([0-9]*)';
}