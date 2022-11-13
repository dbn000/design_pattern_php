<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Factory;

class ClienteContado extends AbstractCliente {

    protected function creaPedido(float $cantidad): AbstractPedido
    {
        return new PedidoContado($cantidad);        
    }
}