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
        $instance = app('btoast');
        if (!isset($instance)) {
            $instance = app()->make('Manuelgeek\LaravelBToast\BToast');
        }
        if (!is_null($message)) {
            return $instance->message($message, $level, $title, $subtitle );
        }
        return $instance;
    }
}

