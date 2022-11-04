<?php 
declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

/**
 * Class SingletonTest.
 *
 * @package DesignPattern\Singleton
 */
class SingletonTest extends TestCase
{
    private const VALUE_STRING_EXAMPLE = 'time_is_gold';
    /**
     * @testUniqueInstance
     */
    public function testUniqueInstance(): void
    {
        $singleton = Singleton::instance();
        $singleton2 = Singleton::instance();
        $this->assertEquals($singleton, $singleton2);
    }

    /**
     * @testUniqueInstance
     */
    public function testEqualValue(): void
    {
        $singleton = Singleton::instance();
        $singleton->value = self::VALUE_STRING_EXAMPLE;
        $singleton2 = Singleton::instance();
        $this->assertEquals($singleton->value, $singleton2->value);
    }
}