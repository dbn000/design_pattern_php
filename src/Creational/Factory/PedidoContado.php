<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Factory;

class PedidoContado extends AbstractPedido {

    public function valida(): bool
    {
        $this->setStatusOk();
        return true;
    }
    
    public function pago(): AbstractRespuestaPedido
    {
        $cantidad = number_format($this->cantidad, 2, ',', ' ');
        $message = "El pago al contado de ${cantidad} se ha realizado";
        $respuestaPedido = new RespuestaPedidoContado(
            $this->status,
            $message
        );
        return $respuestaPedido;
    }
}