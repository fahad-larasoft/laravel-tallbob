<?php

namespace Larasoft\TallBobSms\Tests;

use Larasoft\TallBobSms\Facades\TallBobSms;
use Larasoft\TallBobSms\ServiceProvider;
use Orchestra\Testbench\TestCase;

class TallBobSmsTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'tall-bob-sms' => TallBobSms::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
