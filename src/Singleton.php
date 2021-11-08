<?php

namespace AliReaza\Singleton;

/**
 * Class Singleton
 *
 * @package AliReaza\Singleton
 */
class Singleton extends AbstractSingleton implements SingletonInterface
{
    /**
     * @var Singleton|null
     */
    private static ?Singleton $instance = null;

    /**
     * gets the instance via lazy initialization (created on first usage)
     *
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        if (is_null(static::$instance)) {
            static::$instance = new static;
        }

        return static::$instance;
    }
}