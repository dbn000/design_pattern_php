<?php

declare (strict_types = 1);

namespace DesignPattern\Creational\Prototype;

class DocAssignmentCertificate extends AbstractDocument {

    public string $name = "Certificado de cesión";

    public function print(): void
    {
        $action = "Imprime";
        $this->showList([$action, $this->name, $this->contenido]);
    }

    public function show(): void
    {
        $action = "Muestra";
        $this->showList([$action, $this->name, $this->contenido]);
    }
}