<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

use DesignPattern\Creational\Builder\AbstractConstructorDocumentacionVehiculo;
use DesignPattern\Creational\Builder\AbstractDocumentacion;

class Vendedor {
    protected AbstractConstructorDocumentacionVehiculo $constructorDocumentacionVehiculo;

    public function __construct(
        AbstractConstructorDocumentacionVehiculo $constructorDocumentacion
    )
    {
        $this->constructorDocumentacionVehiculo = $constructorDocumentacion;
    }

    public function genera(string $nombreCliente): AbstractDocumentacion
    {
        $this->constructorDocumentacionVehiculo->generaFormularioPedido($nombreCliente);
        $this->constructorDocumentacionVehiculo->generaSolicitudMatriculacion($nombreCliente);
        return $this->constructorDocumentacionVehiculo->resultado();
    }
}