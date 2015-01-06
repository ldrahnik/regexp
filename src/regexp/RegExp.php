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
		PASSWORD = '^[a-z0-9_-]{6,18}$',
		URL = '^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$';
}