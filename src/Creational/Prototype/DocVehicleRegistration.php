<?php

declare (strict_types = 1);

namespace DesignPattern\Creational\Prototype;

class DocVehicleRegistration extends AbstractDocument {

    public string $name = "Solicitud de Matriculacion";

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