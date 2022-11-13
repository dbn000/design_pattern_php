<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Factory;

abstract class AbstractCliente {

    protected array $pedidos;
    public array $respuestasPedido;

    public function nuevoPedido(float $cantidad): void
    {
        $pedido = $this->creaPedido($cantidad);
        $this->respuestasPedido = [];
        if ($pedido->valida()) {
            $respuestaPedido = $pedido->pago();
            $this->pedidos[] = $pedido;
            $this->respuestasPedido[] = $respuestaPedido->resumenPedido();
        }
    }

    public function mostrarRespuestasPedido(): array
    {
        return $this->respuestasPedido;
    }

    abstract protected function creaPedido(float $cantidad): AbstractPedido;
}