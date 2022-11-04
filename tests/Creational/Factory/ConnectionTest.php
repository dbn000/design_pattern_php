<?php

declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\Factory\Connection;
use PHPUnit\Framework\TestCase;

/**
 * Class ConnectionTest.
 *
 * @package DesignPattern\Singleton
 */
class ConnectionTest extends TestCase
{
    /**
     * @testUniqueInstance
     */
    public function testConnect(): void
    {
        $connection = new Connection();
        $this->assertEquals($connection->createConnection(), Connection::VALUE_STRING_CONNECTED);
    }

    /**
     * @testUniqueInstance
     */
    public function testDisconnect(): void
    {
        $connection = new Connection();
        $this->assertEquals($connection->deleteConnection(), Connection::VALUE_STRING_DISCONNECTED);
    }
}
