<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

abstract class AbstractVehicleDocumentBuilder{

    protected AbstractDocumentGeneratorBuilder $documentGenerator;
    
    public function result(): AbstractDocumentGeneratorBuilder
    {
        return $this->documentGenerator;
    }

    abstract public function generateOrderForm(string $clientName):void;
    abstract public function generateLicensePlateRequest(string $applicantName):void;

}