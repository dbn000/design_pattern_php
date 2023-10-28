<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

class HtmlDocumentBuilder extends AbstractVehicleDocumentBuilder{

    public function __construct()
    {
        $this->documentGenerator = new HtmlDocumentGeneratorBuilder();
    }
    public function generateOrderForm(string $clientName):void
    {
        $document = "<html> Formulario de solicitud del cliente: ${$clientName} </html>";
        $this->documentGenerator->addDocument($document);

    }
    public function generateLicensePlateRequest(string $applicantName):void
    {
        $document = "<html> Solicitud de matriculación de: ${$applicantName} </html>";
        $this->documentGenerator->addDocument($document);
    }

}