<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Factory;

class PedidoCredito extends AbstractPedido {

    public const CREDIT_LIMIT_MIN = 1000;
    public const CREDIT_LIMIT_MAX = 5000;

    public function valida(): bool
    {
        if ($this->cantidad < self::CREDIT_LIMIT_MIN || $this->cantidad > self::CREDIT_LIMIT_MAX) {
            return false;
        }
        $this->setStatusOk();
        return true;
    }

    public function pago(): AbstractRespuestaPedido
    {
        $cantidad = number_format($this->cantidad, 2, ',', ' ');
        $message = "El pago al crédito de ${cantidad} se ha realizado";
        $respuestaPedido = new RespuestaPedidoCredito(
            $this->status,
            $message
        );
        return $respuestaPedido;
    }
}