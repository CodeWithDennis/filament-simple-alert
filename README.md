# A plugin for adding straightforward alerts to your filament pages

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codewithdennis/filament-simple-alert.svg?style=flat-square)](https://packagist.org/packages/codewithdennis/filament-simple-alert)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/codewithdennis/filament-simple-alert/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/codewithdennis/filament-simple-alert/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/codewithdennis/filament-simple-alert/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/codewithdennis/filament-simple-alert/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/codewithdennis/filament-simple-alert.svg?style=flat-square)](https://packagist.org/packages/codewithdennis/filament-simple-alert)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require codewithdennis/filament-simple-alert
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-simple-alert-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-simple-alert-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-simple-alert-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$simpleAlert = new CodeWithDennis\SimpleAlert();
echo $simpleAlert->echoPhrase('Hello, CodeWithDennis!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [CodeWithDennis](https://github.com/CodeWithDennis)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
