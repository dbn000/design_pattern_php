<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

use DesignPattern\Creational\Builder\Vendedor;

class BuilderTestLauncher {

    public function __construct(array $constructoresDocumentacion, string $nombreCliente)
    {
        foreach ($constructoresDocumentacion as $constructorDocumentacion) {
            $vendedor = New Vendedor($constructorDocumentacion);
            $documentacion = $vendedor->genera($nombreCliente);
            $documentacion->imprime();
        }
    }
}