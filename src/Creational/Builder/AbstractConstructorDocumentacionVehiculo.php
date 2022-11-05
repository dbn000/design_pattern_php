<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Builder;
use DesignPattern\Creational\Builder\AbstractDocumentacion;

abstract class AbstractConstructorDocumentacionVehiculo{

    protected AbstractDocumentacion $documentacion;
    
    public function resultado(): AbstractDocumentacion
    {
        return $this->documentacion;
    }

    abstract public function generaFormularioPedido(string $nombreCliente):void;
    abstract public function generaSolicitudMatriculacion(string $nombreSolicitante):void;

}