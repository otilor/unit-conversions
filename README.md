# A package that converts from a unit to the other.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/gabrielfemi/unit-conversions.svg?style=flat-square)](https://packagist.org/packages/gabrielfemi/unit-conversions)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/gabrielfemi/unit-conversions/run-tests?label=tests)](https://github.com/gabrielfemi/unit-conversions/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/gabrielfemi/unit-conversions.svg?style=flat-square)](https://packagist.org/packages/gabrielfemi/unit-conversions)


This is where your description should go. Try and limit it to a paragraph or two. Consider adding a small example.


## Installation

You can install the package via composer:

```bash
composer require gabrielfemi/unit-conversions
```

## Usage

``` php
$lbs = Weight::fromKilograms(100)->toLbs();
echo $lbs;
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Gabriel Akinyosoye](https://github.com/GabrielFemi)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
