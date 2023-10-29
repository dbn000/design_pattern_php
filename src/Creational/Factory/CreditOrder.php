<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Factory;

class CreditOrder extends AbstractOrder {

    public const CREDIT_LIMIT_MIN = 1000;
    public const CREDIT_LIMIT_MAX = 5000;

    public function validate(): bool
    {
        if ($this->quantity < self::CREDIT_LIMIT_MIN || $this->quantity > self::CREDIT_LIMIT_MAX) {
            return false;
        }
        $this->setStatusOk();
        return true;
    }

    public function pay(): AbstractOrderResponse
    {
        $quantity = number_format($this->quantity, 2, ',', ' ');
        $message = "El pago al crédito de ${quantity} se ha realizado";
        return new CreditOrderResponse(
            $this->status,
            $message
        );
    }
}