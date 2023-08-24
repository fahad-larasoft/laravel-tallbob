# Tall Bob Sms

Laravel Package to send SMS/MMS using Tall Bob API

## Installation

Install via composer
```bash
composer require fahad-larasoft/tallbob
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
Larasoft\TallBobSms\Facades\TallBobSms::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="Larasoft\TallBobSms\ServiceProvider" --tag="config"
```

When published, the `config/tallbobsms.php` config file contains:

```php
return [
    /**
     * Sender Id to be sent with request
     */
    'sender_id' => env('TALLBOB_SENDER_ID', env('APP_NAME')),

    /**
     * API Username provided by Tall Bob for API
     */
    'api_username' => env('TALLBOB_API_USERNAME', ''),

    /**
     * API Key provided by Tall Bob for API
     */
    'api_key' => env('TALLBOB_API_KEY', ''),

    /**
     * To check if API is in test mode
     */
    'test_mode' => env('TALLBOB_TEST_MODE', false),
];
```

You can change it according to your needs.

## Usage

* Send MMS
```bash
 TallBobSms::message($message)
            ->senderId($sender_id)
            ->number($mobile_number)    // with country code
            ->subject($subject)
            ->fileUrl($file_url)        // URL of file src
            ->sendMMS();
  ```

* Send SMS
```bash
 TallBobSms::message($message)
            ->senderId($sender_id)
            ->number($mobile_number)    // with country code
            ->send();
  ```



## Security

If you discover any security related issues, please email
instead of using the issue tracker.

## Credits
- [Fahad Ali][link-author]
- [All Contributors][link-contributors]


[link-author]: https://www.linkedin.com/in/fahad3
[link-contributors]: https://www.linkedin.com/in/fahad3/
