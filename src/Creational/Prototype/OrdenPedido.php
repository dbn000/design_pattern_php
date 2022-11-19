<?php

declare (strict_types = 1);

namespace DesignPattern\Creational\Prototype;

class OrdenPedido extends AbstractDocumento {

    private $name = "Orden de pedido";

    public function imprime(): void
    {
        $action = "Imprime";
        $this->muestraInfo([$action, $this->name, $this->contenido]);
    }

    public function muestra(): void
    {
        $action = "Muestra";
        $this->muestraInfo([$action, $this->name, $this->contenido]);
    }
}