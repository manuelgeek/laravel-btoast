# laravel-btoast

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

**1.** Via Composer

``` bash
composer require manuelgeek/laravel-btoast
```

**2.** *Optional, below Laravel 5.5*: Add `'Manuelgeek\LaravelBtoast\BToastServiceProvider'` to `providers` in `config/app.php`, and add `'BToast' => 'Manuelgeek\LaravelBtoast\Facades\BToast'` to `aliases` in `config/app.php`.

  ```php
  // config/app.php
  'providers' => array(
    // ...
    'Manuelgeek\LaravelBtoast\BToastServiceProvider',
  ),
  // ...
  'aliases' => array(
    // ...
    'BToast' => 'Manuelgeek\LaravelBtoast\Facades\BToast',
  ),
  ```

**3.** Include `@include('toast::messages')`in your layout template.

**4.** *Optional*: Run `php artisan vendor:publish --provider="Manuelgeek\LaravelBtoast\BToastServiceProvider" --tag="config"` to publish the config file.

**5.** *Optional*: Modify the published configuration file located at `config/laravel-btoast.php` to your preference.

**6.** *Optional*: Run `php artisan vendor:publish --provider="Manuelgeek\LaravelBtoast\BToastServiceProvider" --tag="views"` to publish the views.

**7.** *Optional*: Modify the published views located at `resources/views/vendor/btoast` to your preference.


## Usage

Use the BToast facade (`BToast::`) or the helper function (`btoast()->`) to access the methods in this package. You can also chain multiple messages together using method chaining: `btoast()->success('test')->info('user')`.  The `title` and `subtitle` arguments is optional.

#### Message
```php
BToast::message('message', 'level', 'title');
toast()->message('message', 'level', 'title');
toast('message', 'title');
```
Add a toast to the session. Using `btoast('message')` will use the default level.

Levels include `info`, `success`, `error`, `warning`, `dark`, `light`, `secondary`

#### Info
```php
BToast::info('message', 'title', 'subtitle');
btoast()->info('message', 'title', 'subtitle');
```

#### Success
```php
BToast::success('message', 'title', 'subtitle');
btoast()->success('message', 'title', 'subtitle');
```

#### Error
```php
BToast::error('message', 'title', 'subtitle');
btoast()->error('message', 'title', 'subtitle');
```

#### Warning
```php
BToast::warning('message', 'title', 'subtitle');
btoast()->warning('message', 'title', 'subtitle');
```

#### Light
```php
BToast::light('message', 'title', 'subtitle');
btoast()->light('message', 'title', 'subtitle');
```

#### Dark
```php
BToast::dark('message', 'title', 'subtitle');
btoast()->dark('message', 'title', 'subtitle');
```

#### Secondary
```php
BToast::secondary('message', 'title', 'subtitle');
btoast()->secondary('message', 'title', 'subtitle');
```

#### Clear
```php
BToast::clear();
btoast()->clear();
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email emashmagak@appslab.co.ke instead of using the issue tracker.

## Credits

- [ManuEl Geek][link-author]


[<img width=200 src="https://appslab.co.ke/assets/img/logo.png">](https://appslab.co.ke) 

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/manuelgeek/laravel-btoast.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/manuelgeek/laravel-btoast.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/manuelgeek/laravel-btoast/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/manuelgeek/laravel-btoast
[link-downloads]: https://packagist.org/packages/manuelgeek/laravel-btoast
[link-travis]: https://travis-ci.org/manuelgeek/laravel-btoast
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/manuelgeek
