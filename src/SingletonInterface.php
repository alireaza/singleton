<?php

namespace AliReaza\Singleton;

/**
 * Interface SingletonInterface
 *
 * @package AliReaza\Singleton
 */
interface SingletonInterface
{
    /**
     * gets the instance via lazy initialization (created on first usage)
     *
     * @return object
     */
    public static function getInstance(): object;
}