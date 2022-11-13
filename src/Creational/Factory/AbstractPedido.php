<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Factory;


abstract class AbstractPedido {

    protected float $cantidad;
    public int $status;

    public const STATUS_PEDIDO_NO_STATUS = 100;
    public const STATUS_PEDIDO_OK = 200;

    public function __construct(float $cantidad)
    {
        $this->cantidad = $cantidad;    
        $this->status = self::STATUS_PEDIDO_NO_STATUS;
    }

    abstract public function valida(): bool;

    public function setStatusOk()
    {
        $this->status = self::STATUS_PEDIDO_OK;
    }
    
    abstract public function pago(): AbstractRespuestaPedido;
}