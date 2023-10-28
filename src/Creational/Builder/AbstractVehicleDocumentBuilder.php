<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

abstract class AbstractVehicleDocumentBuilder{

    protected AbstractBuilder $documentation;
    
    public function resultado(): AbstractBuilder
    {
        return $this->documentation;
    }

    abstract public function generaFormularioPedido(string $nombreCliente):void;
    abstract public function generaSolicitudMatriculacion(string $nombreSolicitante):void;

}