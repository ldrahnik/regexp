ldrahnik/regexp
======

[![Build Status](https://travis-ci.org/ldrahnik/regexp.svg)](https://travis-ci.org/ldrahnik/regexp)
[![Latest stable](https://img.shields.io/packagist/v/ldrahnik/regexp.svg)](https://packagist.org/packages/ldrahnik/regext)

Set of regular expressions.

Requirements
------------

ldrahnik/regexp requires PHP 5.4 or higher.

- [Nette Framework](https://github.com/nette/nette)

Installation
------------

Install regexp to your project using  [Composer](http://getcomposer.org/):

```sh
$ composer require ldrahnik/regexp
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

Now you can use all regulars through services

```php
	/** @var \regexp\Regexp @inject */
	private $regexp;

    public function __construct(regexp\Regexp $regexp)
    {
    	$this->regex = $regexp;
    }
    
    public function createComponentForm()
    {
        $form = new Nette\Application\UI\Form();
        $form->addText('twitter', 'Twitter username')
            ->setDefaultValue('@')
            ->addCondition(Form::FILLED)
        	    ->addRule(Form::PATTERN, 'Please enter twitter username, for example: @username',
        	    $this->regexp->getRegularExpression('twitterUsername'));
        ...

        //  $this->regexp->getRegularExpression('twitterUsername'));
        //  equivalent of that expression is
        //  $this->regexp->getTwitterUsername();
    }
```

You are able to use or override already existing embedded regular expressions

```sh
'username' => '^[a-z0-9_-]{3,16}$',
'twitterUsername' =>  '^(\@)?[A-Za-z0-9_]+$',
'password' => '^[a-z0-9_-]{6,18}$',
'facebook' => '^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]',
'google' => '((http|https):\/\/)?(www[.])?plus\.google\.com\/.?\/?.?\/?([0-9]*)'
```
