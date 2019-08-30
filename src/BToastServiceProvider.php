<?php

namespace Manuelgeek\LaravelBtoast;

use Illuminate\Support\ServiceProvider;

class BToastServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-btoast.php' => config_path('laravel-btoast.php'),
        ], 'config');
        $this->publishes([
            __DIR__.'/../views' => base_path('resources/views/vendor/btoast'),
        ], 'views');
        $this->loadViewsFrom(__DIR__.'/../views', 'btoast');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-btoast.php', 'laravel-btoast'
        );
        $this->app->singleton('btoast', 'Manuelgeek\LaravelBtoast\BToast');
        $this->app->make('Manuelgeek\LaravelBtoast\BToast');
        $this->registerFacades();
        $this->registerHelper();
    }

    private function registerFacades()
    {
        $this->app->bind('B_Toast', function () {
            return $this->app->make(BToast::class);
        });
    }

    private function registerHelper()
    {
        $file = __DIR__.'/Support/helpers.php';
        if (file_exists($file)) {
            require_once $file;
        }
    }
}
