<?php

/*
 * PHP-Alphabets (https://github.com/delight-im/PHP-Alphabets)
 * Copyright (c) delight.im (https://www.delight.im/)
 * Licensed under the MIT License (https://opensource.org/licenses/MIT)
 */

namespace Delight\Alphabets;

/** Sets of digits or characters that may be used for base conversions, encoding and decoding tasks, and input validation */
final class Alphabet {

	/** @var string the 52 letters from the basic Latin alphabet (ISO 646) */
	const ALPHA = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	/** @var string 33 letters from the basic Latin alphabet (ISO 646), easily readable by humans (i.e. no single-character homoglyphs) and not forming any (offensive) words (i.e. no vowels) */
	const ALPHA_HUMAN = 'CFHJKLMNPRTVWXYbcdfghjkmnpqrtvwxy';
	/** @var string the 26 small letters from the basic Latin alphabet (ISO 646) */
	const ALPHA_LOWERCASE = 'abcdefghijklmnopqrstuvwxyz';
	/** @var string 18 small letters from the basic Latin alphabet (ISO 646), easily readable by humans (i.e. no single-character homoglyphs) and not forming any (offensive) words (i.e. no vowels) */
	const ALPHA_LOWERCASE_HUMAN = 'bcdfghjkmnpqrtvwxy';
	/** @var string the 26 capital letters from the basic Latin alphabet (ISO 646) */
	const ALPHA_UPPERCASE = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	/** @var string 15 capital letters from the basic Latin alphabet (ISO 646), easily readable by humans (i.e. no single-character homoglyphs) and not forming any (offensive) words (i.e. no vowels) */
	const ALPHA_UPPERCASE_HUMAN = 'CFHJKLMNPRTVWXY';
	/** @var string the 62 decimal digits and letters from the basic Latin alphabet (ISO 646) */
	const ALPHANUMERIC = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	/** @var string 46 decimal digits, letters from the basic Latin alphabet (ISO 646) and punctuation characters from US-ASCII, easily readable by humans (i.e. no single-character homoglyphs) and not forming any (offensive) words (i.e. no vowels) */
	const ALPHANUMERIC_AND_PUNCTUATION_HUMAN = '3479CFHJKLMNPRTVWXYbcdfghjkmnpqrtvwxy#%+-?@^_~';
	/** @var string 37 decimal digits and letters from the basic Latin alphabet (ISO 646), easily readable by humans (i.e. no single-character homoglyphs) and not forming any (offensive) words (i.e. no vowels) */
	const ALPHANUMERIC_HUMAN = '3479CFHJKLMNPRTVWXYbcdfghjkmnpqrtvwxy';
	/** @var string the 36 decimal digits and small letters from the basic Latin alphabet (ISO 646) */
	const ALPHANUMERIC_LOWERCASE = '0123456789abcdefghijklmnopqrstuvwxyz';
	/** @var string 22 decimal digits and small letters from the basic Latin alphabet (ISO 646), easily readable by humans (i.e. no single-character homoglyphs) and not forming any (offensive) words (i.e. no vowels) */
	const ALPHANUMERIC_LOWERCASE_HUMAN = '3479bcdfghjkmnpqrtvwxy';
	/** @var string the 36 decimal digits and capital letters from the basic Latin alphabet (ISO 646) */
	const ALPHANUMERIC_UPPERCASE = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	/** @var string 19 decimal digits and capital letters from the basic Latin alphabet (ISO 646), easily readable by humans (i.e. no single-character homoglyphs) and not forming any (offensive) words (i.e. no vowels) */
	const ALPHANUMERIC_UPPERCASE_HUMAN = '3479CFHJKLMNPRTVWXY';
	/** @var string the 95 printable characters from US-ASCII */
	const ASCII_PRINTABLE = ' !"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
	/** @var string 51 printable characters from US-ASCII, easily readable by humans (i.e. no single-character homoglyphs) and not forming any (offensive) words (i.e. no vowels) */
	const ASCII_PRINTABLE_HUMAN = '#%&*+-3479<=>?@CFHJKLMNPRTVWXY^_bcdfghjkmnpqrtvwxy~';
	/** @var string the 32 characters from the Base32 encoding (RFC 3548 and RFC 4648) */
	const BASE_32 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567';
	/** @var string the 58 characters from the Base58 encoding (Flickr, Bitcoin and IPFS) */
	const BASE_58 = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz123456789';
	/** @var string the 64 characters from the Base64 encoding (RFC 1421, RFC 2045, RFC 3548 and RFC 4648) */
	const BASE_64 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
	/** @var string the 64 characters from the URL-safe (and filename-safe) variant of the Base64 encoding (RFC 3548 and RFC 4648) */
	const BASE_64_URL = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_';
	/** @var string the 85 characters from the Base85 or Ascii85 encoding (PostScript, PDF and Git) */
	const BASE_85 = '!"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstu';
	/** @var string the 2 standard binary digits */
	const BINARY = '01';
	/** @var string the 10 standard decimal digits */
	const DECIMAL = '0123456789';
	/** @var string the 12 standard duodecimal digits */
	const DUODECIMAL = self::DUODECIMAL_UPPERCASE;
	/** @var string the 12 standard duodecimal digits with small letters */
	const DUODECIMAL_LOWERCASE = '0123456789ab';
	/** @var string the 12 standard duodecimal digits with capital letters */
	const DUODECIMAL_UPPERCASE = '0123456789AB';
	/** @var string the 16 standard hexadecimal digits */
	const HEX = self::HEX_UPPERCASE;
	/** @var string the 16 standard hexadecimal digits with small letters */
	const HEX_LOWERCASE = '0123456789abcdef';
	/** @var string the 16 standard hexadecimal digits with capital letters */
	const HEX_UPPERCASE = '0123456789ABCDEF';
	/** @var string the 8 standard octal digits */
	const OCTAL = '01234567';
	/** @var string the 4 standard quaternary digits */
	const QUATERNARY = '0123';
	/** @var string the 5 standard quinary digits */
	const QUINARY = '01234';
	/** @var string the 6 standard senary digits */
	const SENARY = '012345';
	/** @var string the 3 standard ternary digits */
	const TERNARY = '012';
	/** @var string the 20 standard vigesimal digits */
	const VIGESIMAL = self::VIGESIMAL_UPPERCASE;
	/** @var string the 20 standard vigesimal digits with small letters */
	const VIGESIMAL_LOWERCASE = '0123456789abcdefghij';
	/** @var string the 20 standard vigesimal digits with capital letters */
	const VIGESIMAL_UPPERCASE = '0123456789ABCDEFGHIJ';

	/**
	 * Checks if the specified alphabet is a standard alphabet with 2 to 62 digits or characters
	 *
	 * @param string $alphabet
	 * @return bool
	 */
	public static function isStandardAlphabet($alphabet) {
		$base = \strlen($alphabet);

		if ($base < 2 || $base > 62) {
			return false;
		}

		if ($base <= 10) {
			return $alphabet === \substr(self::DECIMAL, 0, $base);
		}
		elseif ($base <= 36) {
			return $alphabet === \substr(self::ALPHANUMERIC_LOWERCASE, 0, $base) || $alphabet === \substr(self::ALPHANUMERIC_UPPERCASE, 0, $base);
		}
		else {
			return $alphabet === \substr(self::ALPHANUMERIC, 0, $base);
		}
	}

	private function __construct() {}

}
