<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Factory;

abstract class AbstractClient {

    protected array $orderList;
    public array $orderResponseList;

    public function newOrder(float $quantity): void
    {
        $order = $this->createOrder($quantity);
        $this->orderResponseList = [];
        if ($order->validate()) {
            $orderResponse = $order->pay();
            $this->orderList[] = $order;
            $this->orderResponseList[] = $orderResponse->orderSummary();
        }
    }

    public function orderResponseList(): array
    {
        return $this->orderResponseList;
    }

    abstract protected function createOrder(float $quantity): AbstractOrder;
}