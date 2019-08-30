<?php

if (!function_exists('btoast'))
{
    /**
     * @param null $message
     * @param null $title
     * @param null $subtitle
     * @param string $level
     * @return \Illuminate\Contracts\Foundation\Application|mixed
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    function btoast($message = null, $level = 'light', $title = null, $subtitle = null)
    {
        \Log::error('here1');
        $instance = app('btoast');
        if (!isset($instance)) {
            \Log::error('here2');
            $instance = app()->make('Manuelgeek\LaravelBToast\BToast');
        }
        if (!is_null($message)) {
            \Log::error('here3');
            return $instance->message($message, $level, $title, $subtitle );
        }
        return $instance;
    }
}

