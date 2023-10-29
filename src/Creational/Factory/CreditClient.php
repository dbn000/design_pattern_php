<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Factory;

class CreditClient extends AbstractClient {

    protected function createOrder(float $quantity): AbstractOrder
    {
        return new CreditOrder($quantity);
    }
}