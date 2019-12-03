<?php

namespace Manuelgeek\LaravelBtoast\Facades;

use Illuminate\Support\Facades\Facade;

class BToast extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'B_Toast';
    }
}
