<?php

/*
 * PHP-Alphabets (https://github.com/delight-im/PHP-Alphabets)
 * Copyright (c) delight.im (https://www.delight.im/)
 * Licensed under the MIT License (https://opensource.org/licenses/MIT)
 */

// enable error reporting
\error_reporting(\E_ALL);
\ini_set('display_errors', 'stdout');

// enable assertions
\ini_set('assert.active', '1');
@\ini_set('zend.assertions', '1');
\ini_set('assert.exception', '1');

\header('Content-Type: text/plain; charset=utf-8');

require __DIR__.'/../vendor/autoload.php';

$recl = new \ReflectionClass('\\Delight\\Alphabets\\Alphabet');

foreach ($recl->getConstants() as $name => $chars) {
	echo $name . "\n";
	echo "\t" . $chars . "\n";

	if (\Delight\Alphabets\Alphabet::isStandardAlphabet($chars)) {
		echo "\t" . 'Base n (standard)' . "\n";
	}

	echo "\n";
}
