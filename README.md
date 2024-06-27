# Filament Simple Alert

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codewithdennis/filament-simple-alert.svg?style=flat-square)](https://packagist.org/packages/codewithdennis/filament-simple-alert)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/codewithdennis/filament-simple-alert/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/codewithdennis/filament-simple-alert/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/codewithdennis/filament-simple-alert.svg?style=flat-square)](https://packagist.org/packages/codewithdennis/filament-simple-alert)

This package provides a simple alert component for Filament.

## Installation

You can install the package via composer:

```bash
composer require codewithdennis/filament-simple-alert
```

## Usage

### Simple Alerts

```php
SimpleAlertEntry::make()
    ->danger()
    ->info()
    ->success()
    ->warning()
```

If you would like to use a [different color](https://filamentphp.com/docs/3.x/support/colors), you can use the `color` method:

```php
SimpleAlertEntry::make()
    ->color('purple')
```

### Title

You can add a title to the alert by using the `title` method:

```php
SimpleAlertEntry::make()
    ->title('This is the title')
```

### Description

You can add a description to the alert by using the `description` method:

```php
SimpleAlertEntry::make()
    ->description('This is the description')
```

### Icon

By default, all simple alerts will have an icon. If you would like to change the icon, you can use the `icon` method:

```php
SimpleAlertEntry::make()
    ->color('purple')
    ->icon('heroicon-s-users')
```

### Link

You can also add a link to the alert by using the `link` method:

```php
SimpleAlertEntry::make()
    ->info()
    ->link('https://filamentphp.com'),
```

If you would like the link to customize the link label, you can use the `linkLabel` method:

```php
SimpleAlertEntry::make()
    ->info()
    ->link('https://filamentphp.com')
    ->linkLabel('Read more!'),
```

If you would like the link to open in a new tab, you can use the `blank` method:

```php
SimpleAlertEntry::make()
    ->info()
    ->link('https://filamentphp.com')
    ->linkBlank(),
```

### Example

```php
SimpleAlertEntry::make()
    ->success()
    ->title(new HtmlString('<strong>Hoorraayy! Your request has been approved! 🎉</strong>'))
     ->description('Lorem ipsum dolor sit amet consectetur adipisicing elit.')
    ->link('https://filamentphp.com')
    ->linkLabel('Read more!')
    ->linkBlank(),
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [CodeWithDennis](https://github.com/CodeWithDennis)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
