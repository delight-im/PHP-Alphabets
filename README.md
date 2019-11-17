# PHP-Alphabets

Sets of digits or characters that may be used for base conversions, encoding and decoding tasks, and input validation

## Requirements

 * PHP 5.6.0+

## Installation

 1. Include the library via Composer [[?]](https://github.com/delight-im/Knowledge/blob/master/Composer%20(PHP).md):

    ```
    $ composer require delight-im/alphabets
    ```

 1. Include the Composer autoloader:

    ```php
    require __DIR__ . '/vendor/autoload.php';
    ```

## Usage

### Available alphabets

```php
\Delight\Alphabets\Alphabet::ALPHA;
\Delight\Alphabets\Alphabet::ALPHA_HUMAN;
\Delight\Alphabets\Alphabet::ALPHA_LOWERCASE;
\Delight\Alphabets\Alphabet::ALPHA_LOWERCASE_HUMAN;
\Delight\Alphabets\Alphabet::ALPHA_UPPERCASE;
\Delight\Alphabets\Alphabet::ALPHA_UPPERCASE_HUMAN;
\Delight\Alphabets\Alphabet::ALPHANUMERIC;
\Delight\Alphabets\Alphabet::ALPHANUMERIC_AND_PUNCTUATION_HUMAN;
\Delight\Alphabets\Alphabet::ALPHANUMERIC_HUMAN;
\Delight\Alphabets\Alphabet::ALPHANUMERIC_LOWERCASE;
\Delight\Alphabets\Alphabet::ALPHANUMERIC_LOWERCASE_HUMAN;
\Delight\Alphabets\Alphabet::ALPHANUMERIC_UPPERCASE;
\Delight\Alphabets\Alphabet::ALPHANUMERIC_UPPERCASE_HUMAN;
\Delight\Alphabets\Alphabet::ASCII_PRINTABLE;
\Delight\Alphabets\Alphabet::ASCII_PRINTABLE_HUMAN;
\Delight\Alphabets\Alphabet::BASE_32;
\Delight\Alphabets\Alphabet::BASE_58;
\Delight\Alphabets\Alphabet::BASE_64;
\Delight\Alphabets\Alphabet::BASE_64_URL;
\Delight\Alphabets\Alphabet::BASE_85;
\Delight\Alphabets\Alphabet::BINARY;
\Delight\Alphabets\Alphabet::DECIMAL;
\Delight\Alphabets\Alphabet::DUODECIMAL;
\Delight\Alphabets\Alphabet::DUODECIMAL_LOWERCASE;
\Delight\Alphabets\Alphabet::DUODECIMAL_UPPERCASE;
\Delight\Alphabets\Alphabet::HEX;
\Delight\Alphabets\Alphabet::HEX_LOWERCASE;
\Delight\Alphabets\Alphabet::HEX_UPPERCASE;
\Delight\Alphabets\Alphabet::OCTAL;
\Delight\Alphabets\Alphabet::QUATERNARY;
\Delight\Alphabets\Alphabet::QUINARY;
\Delight\Alphabets\Alphabet::SENARY;
\Delight\Alphabets\Alphabet::TERNARY;
\Delight\Alphabets\Alphabet::VIGESIMAL;
\Delight\Alphabets\Alphabet::VIGESIMAL_LOWERCASE;
\Delight\Alphabets\Alphabet::VIGESIMAL_UPPERCASE;
```

### Checking for standard base-n alphabets

```php
\Delight\Alphabets\Alphabet::isStandardAlphabet('01234567');
// => bool(true)
```

## Contributing

All contributions are welcome! If you wish to contribute, please create an issue first so that your feature, problem or question can be discussed.

## License

This project is licensed under the terms of the [MIT License](https://opensource.org/licenses/MIT).
