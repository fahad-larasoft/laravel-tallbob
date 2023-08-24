# Vid Corp Sms

[![Build Status](https://travis-ci.org/larasoft/vid-corp-sms.svg?branch=master)](https://travis-ci.org/larasoft/vid-corp-sms)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/larasoft/vid-corp-sms/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/larasoft/vid-corp-sms/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/CHANGEME/mini.png)](https://insight.sensiolabs.com/projects/CHANGEME)
[![Coverage Status](https://coveralls.io/repos/github/larasoft/vid-corp-sms/badge.svg?branch=master)](https://coveralls.io/github/larasoft/vid-corp-sms?branch=master)

[![Packagist](https://img.shields.io/packagist/v/larasoft/vid-corp-sms.svg)](https://packagist.org/packages/larasoft/vid-corp-sms)
[![Packagist](https://poser.pugx.org/larasoft/vid-corp-sms/d/total.svg)](https://packagist.org/packages/larasoft/vid-corp-sms)
[![Packagist](https://img.shields.io/packagist/l/larasoft/vid-corp-sms.svg)](https://packagist.org/packages/larasoft/vid-corp-sms)

Package description: CHANGE ME

## Installation

Install via composer
```bash
composer require larasoft/vid-corp-sms
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
Larasoft\TallBobSms\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
Larasoft\TallBobSms\Facades\VidCorpSms::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="Larasoft\TallBobSms\ServiceProvider" --tag="config"
```

## Usage

CHANGE ME

## Security

If you discover any security related issues, please email
instead of using the issue tracker.

## Credits

- [](https://github.com/larasoft/vid-corp-sms)
- [All contributors](https://github.com/larasoft/vid-corp-sms/graphs/contributors)

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).
