<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Factory;

class RespuestaPedidoContado extends AbstractRespuestaPedido {

    public function resumenPedido(): RespuestaPedidoContado
    {
        return new self($this->status, $this->message);
    }
}