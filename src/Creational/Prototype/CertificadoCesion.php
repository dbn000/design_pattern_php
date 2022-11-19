<?php

declare (strict_types = 1);

namespace DesignPattern\Creational\Prototype;

class CertificadoCesion extends AbstractDocumento {

    private $name = "Certificado de cesión";

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