# graze-neighborhoods-diagnostic

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

Exception detection strategy for [Graze's transient fault handler](https://github.com/graze/transient-fault-handler) using [Neighborhoods' throwable diagnostic component](https://github.com/neighborhoods/ThrowableDiagnosticComponent).


## Install

Via Composer

``` bash
$ composer require yucadoo/graze-neighborhoods-diagnostic
```

## Usage

``` php
use YucaDoo\GrazeNeighborhoodsDiagnostic\ExceptionDetectionStrategy;
use Graze\TransientFaultHandler\TransientFaultHandlerBuilder;

$neighborhoodsDetectionStrategy = new YucaDoo\GrazeNeighborhoodsDiagnostic\ExceptionDetectionStrategy();

$builder = new TransientFaultHandlerBuilder();
$transientFaultHandler = $builder
    ->setExceptionDetectionStrategy($neighborhoodsDetectionStrategy)
    ...
    ->build();
```

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email hrcajuka@gmail.com instead of using the issue tracker.

## Credits

- [Hrvoje Jukic][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/YucaDoo/graze-neighborhoods-diagnostic.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/YucaDoo/graze-neighborhoods-diagnostic.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/YucaDoo/graze-neighborhoods-diagnostic
[link-downloads]: https://packagist.org/packages/YucaDoo/graze-neighborhoods-diagnostic
[link-author]: https://github.com/yucadoo
[link-contributors]: ../../contributors
