<?php

declare (strict_types = 1);

namespace DesignPattern\Creational\Prototype;

abstract class AbstractDocumentacion {

    protected array $documentos = [];

    public function getDocumentos(): array
    {
        return $this->documentos;
    }
}