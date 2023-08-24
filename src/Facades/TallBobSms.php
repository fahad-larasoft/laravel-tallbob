<?php

namespace Larasoft\TallBobSms\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Larasoft\TallBobSms\Facades\TallBobSms
 */
class TallBobSms extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tall-bob-sms';
    }
}
