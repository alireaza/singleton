<?php

namespace AliReaza\Singleton;

class Singleton extends AbstractSingleton implements SingletonInterface
{
    private static ?Singleton $instance = null;

    public static function getInstance(): Singleton
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}
