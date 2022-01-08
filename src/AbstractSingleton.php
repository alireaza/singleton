<?php

namespace AliReaza\Singleton;

use Exception;

/**
 * Abstract AbstractSingleton
 *
 * @package AliReaza\Singleton
 */
abstract class AbstractSingleton implements SingletonInterface
{
    /**
     * gets the instance via lazy initialization (created on first usage)
     *
     * @return object
     */
    abstract public static function getInstance(): object;

    /**
     * is not allowed to call from outside to prevent from creating multiple instances,
     * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
     */
    protected function __construct()
    {
    }

    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized (which would create a second instance of it)
     *
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception('Cannot unserialize singleton');
    }
}