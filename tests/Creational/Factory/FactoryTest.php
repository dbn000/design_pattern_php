<?php

declare(strict_types=1);

namespace DesignPattern\Tests\Creational\Factory;

use DesignPattern\Creational\Factory\AbstractClient;
use DesignPattern\Creational\Factory\AbstractOrder;
use DesignPattern\Creational\Factory\AbstractOrderResponse;
use DesignPattern\Creational\Factory\CashClient;
use DesignPattern\Creational\Factory\CreditClient;
use DesignPattern\Creational\Factory\CashOrderResponse;
use PHPUnit\Framework\TestCase;

/**
 * Class BuillderTest.
 *
 * @package DesignPattern\Creational\Builder
 */
class FactoryTest extends TestCase
{

    private const QUANTITY_CASH_OK = 500;
    private const QUANTITY_CREDIT_OK = 4000;
    private const QUANTITY_CREDIT_KO = 60000;

    public function testAbstractClient(): void
    {
        $cashClient = new CashClient();
        $this->assertInstanceOf(AbstractClient::class, $cashClient);
        $creditClient = new CreditClient();
        $this->assertInstanceOf(AbstractClient::class, $creditClient);
    }

    public function testCashOrderResponse(): void
    {
        $cashClient = new CashClient();
        $cashClient->newOrder(self::QUANTITY_CASH_OK);
        $orderResponse = $cashClient->orderResponseList()[0] ?? null;
        $this->assertEquals($orderResponse->status, AbstractOrder::STATUS_OK);
    }

    public function testCreditOrderResponseOk(): void
    {
        $creditClient = new CreditClient();
        $creditClient->newOrder(self::QUANTITY_CREDIT_OK);
        $orderResponse = $creditClient->orderResponseList();
        $this->assertIsArray($orderResponse);
        $this->assertNotEmpty($orderResponse);
        $this->assertEquals($orderResponse[0]->status, AbstractOrder::STATUS_OK);
    }

    public function testCreditOrderResponseKo(): void
    {
        $creditClient = new CreditClient();
        $creditClient->newOrder(self::QUANTITY_CREDIT_KO);
        $orderResponse = $creditClient->orderResponseList();
        $this->assertIsArray($orderResponse);
        $this->assertEmpty($orderResponse);
    }
}
