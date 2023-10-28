<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

use DesignPattern\Creational\Builder\AbstractVehicleDocumentBuilder;
use DesignPattern\Creational\Builder\AbstractDocumentGeneratorBuilder;

class Seller {
    protected AbstractVehicleDocumentBuilder $abstractDocumentBuilder;

    public function __construct(
        AbstractVehicleDocumentBuilder $constructorDocumentacion
    )
    {
        $this->abstractDocumentBuilder = $constructorDocumentacion;
    }

    public function genera(string $nombreCliente): AbstractDocumentGeneratorBuilder
    {
        $this->abstractDocumentBuilder->generateOrderForm($nombreCliente);
        $this->abstractDocumentBuilder->generateLicensePlateRequest($nombreCliente);
        return $this->abstractDocumentBuilder->result();
    }
}