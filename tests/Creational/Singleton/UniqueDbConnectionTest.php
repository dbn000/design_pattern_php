<?php 
declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\Singleton\UniqueDbConnection;
use PHPUnit\Framework\TestCase;

/**
 * Class UniqueDbConnectionTest.
 *
 * @package DesignPattern\Singleton
 */
class UniqueDbConnectionTest extends TestCase
{
    private const VALUE_STRING_EXAMPLE = 'time_is_gold';
    /**
     * @testUniqueInstance
     */
    public function testUniqueInstance(): void
    {
        $uniqueDbConnection = UniqueDbConnection::instance();
        $uniqueDbConnection2 = UniqueDbConnection::instance();
        $this->assertEquals($uniqueDbConnection, $uniqueDbConnection2);
    }

    /**
     * @testUniqueInstance
     */
    public function testEqualValue(): void
    {
        $uniqueDbConnection = UniqueDbConnection::instance();
        $uniqueDbConnection->value = self::VALUE_STRING_EXAMPLE;
        $uniqueDbConnection2 = UniqueDbConnection::instance();
        $this->assertEquals($uniqueDbConnection->value, $uniqueDbConnection2->value);
    }
}