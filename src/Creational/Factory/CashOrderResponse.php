<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Factory;

class CashOrderResponse extends AbstractOrderResponse {

    public function orderSummary(): CashOrderResponse
    {
        return new self($this->status, $this->message);
    }
}