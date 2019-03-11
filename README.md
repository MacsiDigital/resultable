 # Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/macsidigital/resultable.svg?style=flat-square)](https://packagist.org/packages/macsidigital/resultable)
[![Build Status](https://img.shields.io/travis/macsidigital/resultable/master.svg?style=flat-square)](https://travis-ci.org/macsidigital/resultable)
[![Quality Score](https://img.shields.io/scrutinizer/g/macsidigital/resultable.svg?style=flat-square)](https://scrutinizer-ci.com/g/macsidigital/resultable)
[![Total Downloads](https://img.shields.io/packagist/dt/macsidigital/resultable.svg?style=flat-square)](https://packagist.org/packages/macsidigital/resultable)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require macsidigital/resultable
```

## Usage

Set the various options in the config like so

``` php
return [
	'no_results' => [
		'20',
		'50',
		'100',
		'250',
		'500',
		'1000'
	]
];
```

Then loop through and use the blade helper to create the links like so, best used in a dropdown

``` php
@foreach(config('resultable.no_results') as $result_amount)
	<a href="@resultableurl()&results={{$result_amount}}">{{$result_amount}}</a>
@endforeach
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email colin@macsi.co.uk instead of using the issue tracker.

## Credits

- [Colin Hall](https://github.com/macsidigital)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).