<?php


namespace Manuelgeek\LaravelBtoast;


class BToast
{

    /**
     * The current toasts.
     *
     * @var array
     */
    protected $toasts = [];

//    protected $animation;
//
//    protected $autohide;
//
//    protected $delay;
//
//    protected $position;

    /**
     * BToast constructor.
     */
//    function __construct()
//    {
//        $this->animation = config('laravel-btoast.animation', true);
//        $this->autohide = config('laravel-btoast.autohide', true);
//        $this->delay = config('laravel-btoast.delay', 500);
//        $this->position = config('laravel-btoast.position', 'top-right');
//    }


    /**
     * @param $message
     * @param null $title
     * @param null $subtitle
     * @return $this
     */
    public function info($message, $title = null, $subtitle = null )
    {
        $this->message($message, 'info', $title, $subtitle);
        return $this;
    }

    /**
     * @param $message
     * @param null $title
     * @param null $subtitle
     * @return $this
     */
    public function success($message, $title = null, $subtitle = null )
    {
        $this->message($message, 'success', $title, $subtitle);
        return $this;
    }

    /**
     * @param $message
     * @param null $title
     * @param null $subtitle
     * @return $this
     */
    public function error($message, $title = null, $subtitle = null)
    {
        $this->message($message, 'danger', $title, $subtitle);
        return $this;
    }

    /**
     * @param $message
     * @param null $title
     * @param null $subtitle
     * @return $this
     */
    public function secondary($message, $title = null, $subtitle = null)
    {
        $this->message($message, 'secondary', $title, $subtitle);
        return $this;
    }

    /**
     * @param $message
     * @param null $title
     * @param null $subtitle
     * @return $this
     */
    public function dark($message, $title = null, $subtitle = null)
    {
        $this->message($message, 'dark', $title, $subtitle);
        return $this;
    }

    public function light($message, $title = null, $subtitle = null)
    {
        $this->message($message, 'light', $title, $subtitle);
        return $this;
    }

    /**
     * Create a warning message.
     *
     * @param string $message
     * @param string $title
     * @param null $subtitle
     * @return $this
     */
    public function warning($message, $title = null, $subtitle = null)
    {
        $this->message($message, 'warning', $title, $subtitle);
        return $this;
    }

    public function message($message, $level, $title = null, $subtitle = null)
    {
        if ($level == null) {
            $level = 'light';
        }
        array_push($this->toasts, [
            'message' => $message,
            'subtitle' => $subtitle,
            'level' => $level,
            'title' => $title,
//            'position' => $this->position,
//            'animation' => $this->animation,
//            'delay' => $this->delay,
//            'autohide' => $this->autohide,
        ]);
        $this->flash();
        return $this;
    }
    /**
     * Clear all pending toasts from the session.
     *
     * @return $this
     */
    public function clear()
    {
        $this->toasts = [];
        $this->flash();
        return $this;
    }

    /**
     * Internal function to flash the session with the pending toasts.
     *
     * @return void
     */
    private function flash()
    {
        session()->flash('btoasts', $this->toasts);
    }
}
