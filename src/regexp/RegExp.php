<?php

/**
 * Common regular expressions.
 *
 * Author Lukáš Drahník <L.Drahnik@gmail.com>
 */
class RegExp {

	/** validator */
	const
		USERNAME = '/^[a-z0-9_-]{3,16}$/',
		EMAIL = '/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/';
}