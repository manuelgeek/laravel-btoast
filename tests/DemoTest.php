<?php

class DemoTest extends \Tests\TestCase
{
    public function testSomethingIsTrue()
    {
        $this->assertTrue(true);
    }

    public function testClassRegistered()
    {
        $this->app->singleton(\Manuelgeek\LaravelBtoast\BToast::class, function () {
            return $this->assertTrue(true);
        });
    }
}
