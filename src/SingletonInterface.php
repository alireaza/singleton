<?php

namespace AliReaza\Singleton;

interface SingletonInterface
{
    /**
     * Gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance(): object;
}
