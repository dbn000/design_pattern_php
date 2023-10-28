<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

class PdfDocumentBuilder extends AbstractVehicleDocumentBuilder{

    public function __construct()
    {
        $this->documentGenerator = new PdfDocumentGeneratorBuilder();
    }
    public function generateOrderForm(string $clientName):void
    {
        $document = "<Pdf> Formulario de solicitud del cliente:  ${$clientName} </Pdf>";
        $this->documentGenerator->addDocument($document);

    }
    public function generateLicensePlateRequest(string $applicantName):void
    {
        $document = "<Pdf> Solicitud de matriculación de:  ${$applicantName} </Pdf>";
        $this->documentGenerator->addDocument($document);
    }

}