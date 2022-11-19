<?php

declare (strict_types = 1);

namespace DesignPattern\Creational\Prototype;

class SolicitudMatriculacion extends AbstractDocumento {

    private $name = "Solicitud de Matriculacion";

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