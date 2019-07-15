# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mahmudz/bangla-somoy.svg?style=flat-square)](https://packagist.org/packages/mahmudz/bangla-somoy)
[![Total Downloads](https://img.shields.io/packagist/dt/mahmudz/bangla-somoy.svg?style=flat-square)](https://packagist.org/packages/mahmudz/bangla-somoy)

This laravel package will help you to convert english date/time/numbers to bangla OR bangla date/time/numbers to english format in your laravel application.

## Installation

You can install the package via composer:

```bash
composer require mahmudz/bangla-somoy
```

## Usage in php

``` php
// Import the package at the top of your file
use Mahmudz\BanglaSomoy\BanglaSomoy;

// To convert Enlgish to Bangla
$bnTime = BanglaSomoy::toBangla('01-12-1995 Friday 01:02:12 Pm');

// To convert Bangla to English
$enTime = BanglaSomoy::toEnglish('০১-১২-১৯৯৫ শুক্রবার ০১:০২:১২ অপরাহ্ন');
```

## Usage in blade file
Before doing that, please register facade class in config ```config/app.php``` file

``` php
// Register service provider as providers.
Mahmudz\BanglaSomoy\BanglaSomoyServiceProvider::class,

// Register class as aliases.
'BanglaSomoy' => Mahmudz\BanglaSomoy\BanglaSomoyFacade::class,
```

``` php
// To convert Enlgish to Bangla
{{ BanglaSomoy::toBangla('01-12-1995 Friday 01:02:12 Pm') }}

// To convert Bangla to English
{{ BanglaSomoy::toEnglish('০১-১২-১৯৯৫ শুক্রবার ০১:০২:১২ অপরাহ্ন') }}

```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.


### Security

If you discover any security related issues, please email mahmudbappy.pri@gmail.com instead of using the issue tracker.

## Credits

- [Mahmudul Hasan](https://github.com/mahmudz)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

