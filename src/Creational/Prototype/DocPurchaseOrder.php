<?php

declare (strict_types = 1);

namespace DesignPattern\Creational\Prototype;

class DocPurchaseOrder extends AbstractDocument {

    public string $name = "Orden de pedido";

    public function print(): void
    {
        $action = "Imprime";
        $this->showList([$action, $this->name, $this->content]);
    }

    public function show(): void
    {
        $action = "Muestra";
        $this->showList([$action, $this->name, $this->content]);
    }
}