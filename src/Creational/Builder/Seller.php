<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

use DesignPattern\Creational\Builder\AbstractVehicleDocumentBuilder;
use DesignPattern\Creational\Builder\AbstractBuilder;

class Seller {
    protected AbstractVehicleDocumentBuilder $constructorDocumentacionVehiculo;

    public function __construct(
        AbstractVehicleDocumentBuilder $constructorDocumentacion
    )
    {
        $this->constructorDocumentacionVehiculo = $constructorDocumentacion;
    }

    public function genera(string $nombreCliente): AbstractBuilder
    {
        $this->constructorDocumentacionVehiculo->generaFormularioPedido($nombreCliente);
        $this->constructorDocumentacionVehiculo->generaSolicitudMatriculacion($nombreCliente);
        return $this->constructorDocumentacionVehiculo->resultado();
    }
}