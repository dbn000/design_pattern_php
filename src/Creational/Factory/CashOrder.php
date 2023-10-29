<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Factory;

class CashOrder extends AbstractOrder {

    public function validate(): bool
    {
        $this->setStatusOk();
        return true;
    }
    
    public function pay(): AbstractOrderResponse
    {
        $quantity = number_format($this->quantity, 2, ',', ' ');
        $message = "El pago al contado de ${quantity} se ha realizado";
        return new CashOrderResponse(
            $this->status,
            $message
        );
    }
}