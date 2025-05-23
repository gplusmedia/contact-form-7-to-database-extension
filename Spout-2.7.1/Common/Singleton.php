<?php

namespace Box\Spout\Common;

/**
 * Class Singleton
 * Defines a class as a singleton.
 *
 * @package Box\Spout\Common
 */
trait Singleton
{
    protected static $instance;

    /**
     * @return static
     */
    final public static function getInstance()
    {
        return static::$instance ?? static::$instance = new static;
    }

    /**
     * Singleton constructor.
     */
    final private function __construct()
    {
        $this->init();
    }

    /**
     * Initializes the singleton
     * @return void
     */
    protected function init() {}

    private function __wakeup() {}
    private function __clone() {}
}
