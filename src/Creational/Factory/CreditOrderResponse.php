<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Factory;

class CreditOrderResponse extends AbstractOrderResponse {

    public function orderSummary(): CreditOrderResponse
    {
        return new self($this->status, $this->message);
    }
}