<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Factory;


abstract class AbstractOrder {

    protected float $quantity;
    public int $status;

    public const STATUS_NO_STATUS = 100;
    public const STATUS_OK = 200;

    public function __construct(float $quantity)
    {
        $this->quantity = $quantity;
        $this->status = self::STATUS_NO_STATUS;
    }

    abstract public function validate(): bool;

    public function setStatusOk(): void
    {
        $this->status = self::STATUS_OK;
    }
    
    abstract public function pay(): AbstractOrderResponse;
}