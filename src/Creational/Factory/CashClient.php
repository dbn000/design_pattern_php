<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Factory;

class CashClient extends AbstractClient {

    protected function createOrder(float $quantity): AbstractOrder
    {
        return new CashOrder($quantity);
    }
}