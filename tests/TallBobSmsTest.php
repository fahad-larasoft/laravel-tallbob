<?php

namespace Larasoft\TallBobSms\Tests;

use Larasoft\TallBobSms\Facades\VidCorpSms;
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
            'vid-corp-sms' => VidCorpSms::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
