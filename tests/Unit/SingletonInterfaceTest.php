<?php

declare(strict_types=1);

namespace AliReaza\Tests\Singleton\Unit;

use AliReaza\Singleton\SingletonInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class SingletonInterfaceTest
 *
 * @package AliReaza\Tests\Singleton\Unit
 */
class SingletonInterfaceTest extends TestCase
{
    public function test_When_method_getInstance_has_exist_Expect_return_true()
    {
        $this->assertTrue(method_exists(SingletonInterface::class, 'getInstance'));
    }
}