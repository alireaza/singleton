<?php

declare(strict_types=1);

namespace AliReaza\Tests\Singleton\Unit;

use AliReaza\Singleton\AbstractSingleton;
use AliReaza\Singleton\Singleton;
use AliReaza\Singleton\SingletonInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class SingletonTest
 *
 * @package AliReaza\Tests\Singleton\Unit
 */
class SingletonTest extends TestCase
{
    public function test_When_create_new_Singleton_Expect_Singleton_instance_of_SingletonInterface()
    {
        $this->expectError();
        $this->assertInstanceOf(SingletonInterface::class, new Singleton);
    }

    public function test_When_create_new_Singleton_Expect_Singleton_instance_of_AbstractSingleton()
    {
        $this->expectError();
        $this->assertInstanceOf(AbstractSingleton::class, new Singleton);
    }

    public function test_When_create_new_Singleton_Expect_throw_exception_for_protected_constructor()
    {
        $this->expectErrorMessageMatches('/^Call to protected/');

        new Singleton;
    }

    public function test_When_extend_Singleton_Expect_throw_exception_for_protected_constructor()
    {
        $this->expectErrorMessageMatches('/^Call to protected/');

        new class extends Singleton {
        };
    }

    public function test_When_extend_Singleton_with_public_constructor_with_arguments_Expect_throw_exception_ArgumentCountError()
    {
        $this->expectErrorMessageMatches('/^Too few arguments to function/');

        new class extends Singleton {
            public function __construct($arg)
            {
            }
        };
    }

    public function test_When_clone_Singleton_Expect_throw_exception_for_private_clone()
    {
        $this->expectErrorMessageMatches('/^Call to private/');

        clone Singleton::getInstance();
    }

    public function test_When_unserialize_Singleton_Expect_throw_exception()
    {
        $this->expectErrorMessage('Cannot unserialize singleton');

        $this->assertIsObject(unserialize(serialize(Singleton::getInstance())));
    }

    public function test_When_multiple_times_get_instance_from_a_Singleton_Expect_all_instances_must_same()
    {
        $obj1 = Singleton::getInstance();
        $obj2 = Singleton::getInstance();

        $this->assertSame(spl_object_hash($obj1), spl_object_hash($obj2));
    }
}
