# GravatarPHP Bundle

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Total Downloads][ico-downloads]][link-downloads]

## Install

Via Composer

``` bash
$ composer require gravatarphp/gravatar-bundle
```

## Usage

Activate the bundle

```php
 // config/bundles.php
return [
     ...
     \Gravatar\GravatarBundle\GravatarBundle::class => ['all' => true],
];
```

```yaml
gravatarphp:
    defaults:
        ... your options
    secure: true
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md)

## Security

If you discover any security related issues, please email gmponos@gmail.com instead of using the issue tracker.

## Credits

- [George Mponos][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/gravatarphp/gravatar-bundle.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/gravatarphp/gravatar-bundle/master.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/gravatarphp/gravatar-bundle.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/gravatarphp/gravatar-bundle
[link-travis]: https://travis-ci.org/gravatarphp/gravatar-bundle
[link-downloads]: https://packagist.org/packages/gravatarphp/gravatar-bundle
[link-author]: https://github.com/gmponos
[link-contributors]: ../../contributors
