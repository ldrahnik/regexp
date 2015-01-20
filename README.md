ldrahnik/regexp
======

[![Build Status](https://travis-ci.org/ldrahnik/regexp.svg)](https://travis-ci.org/ldrahnik/regexp)
[![Latest stable](https://img.shields.io/packagist/v/ldrahnik/regexp.svg)](https://packagist.org/packages/ldrahnik/regext)

Set of regular expressions.

Requirements
------------

ldrahnik/regexp requires PHP 5.3.3 or higher.

Installation
------------

Install regexp to your project using  [Composer](http://getcomposer.org/):

```sh
$ composer require ldrahnik/regexp:~0.9
```

Usage
-----

Register extension in config file

```sh
extensions:
	regexp: regexp\DI\RegexpHelperExtension

regexp:
	myRegularName: ^[0-9]{1,10}$
	twitterUsername: foo
```

You are able to override already existing embedded regular expressions

```sh
'username' => '^[a-z0-9_-]{3,16}$',
'twitterUsername' =>  '^(\@)?[A-Za-z0-9_]+$',
'password' => '^[a-z0-9_-]{6,18}$',
'facebook' => '^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]',
'google' => '((http|https):\/\/)?(www[.])?plus\.google\.com\/.?\/?.?\/?([0-9]*)'
```

Now you can use all regulars through services

```php
	/** @var \regexp\Regexp */
	private $regexpServices;

    public function __construct(regexp\Regexp $regexpServices)
    {
		    $this->regexpServicesc = $regexpServices;
    }
    
    public function test()
    {
        $regular = $this->regexpServices->getRegularExpression('twitterUsername');
    }
```
