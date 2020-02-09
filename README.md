# Laravel Hashids

[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/kodekeep/laravel-hashids/run-tests?label=tests)](https://github.com/kodekeep/laravel-hashids/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Code Coverage](https://badgen.now.sh/codecov/c/github/kodekeep/laravel-hashids)](https://codecov.io/gh/kodekeep/laravel-hashids)
[![Minimum PHP Version](https://badgen.net/packagist/php/kodekeep/laravel-hashids)](https://packagist.org/packages/kodekeep/laravel-hashids)
[![Latest Version](https://badgen.net/packagist/v/kodekeep/laravel-hashids)](https://packagist.org/packages/kodekeep/laravel-hashids)
[![Total Downloads](https://badgen.net/packagist/dt/kodekeep/laravel-hashids)](https://packagist.org/packages/kodekeep/laravel-hashids)
[![License](https://badgen.net/packagist/license/kodekeep/laravel-hashids)](https://packagist.org/packages/kodekeep/laravel-hashids)

> [Hashids](https://hashids.org/) integration for [Laravel](https://laravel.com/).

## Installation

```bash
composer require kodekeep/laravel-hashids
```

## Usage

``` php
use KodeKeep\Hashids\Facades\Hashids;

$encoded = Hashids::encode('Hello');

Hashids::decode($encoded);
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@kodekeep.com. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## License

Mozilla Public License Version 2.0 (MPL-2.0). Please see [License File](LICENSE.md) for more information.
