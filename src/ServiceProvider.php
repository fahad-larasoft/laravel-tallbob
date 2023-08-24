<?php

namespace Larasoft\TallBobSms;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/tallbobsms.php';
    const ROUTES_PATH = __DIR__ . '/../routes/routes.php';

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(
            self::ROUTES_PATH
        );

        $this->publishes([
            self::CONFIG_PATH => config_path('tallbobsms.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'tallbobsms'
        );

        $this->app->bind('tall-bob-sms', function () {
            return new TallBobSms();
        });
    }
}
