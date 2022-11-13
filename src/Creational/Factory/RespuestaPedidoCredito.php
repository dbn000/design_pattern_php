<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Factory;

class RespuestaPedidoCredito extends AbstractRespuestaPedido {

    public function resumenPedido(): RespuestaPedidoCredito
    {
        return new self($this->status, $this->message);
    }
}