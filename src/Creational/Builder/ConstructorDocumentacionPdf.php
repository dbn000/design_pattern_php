<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

class ConstructorDocumentacionPdf extends AbstractConstructorDocumentacionVehiculo{

    public function __construct()
    {
        $this->documentacion = new DocumentacionPdf();
    }
    public function generaFormularioPedido(string $nombreCliente):void
    {
        $documento = "<Pdf> Formulario de solicitud del cliente:  ${nombreCliente} </Pdf>";
        $this->documentacion->agregaDocumento($documento);

    }
    public function generaSolicitudMatriculacion(string $nombreSolicitante):void
    {
        $documento = "<Pdf> Solicitud de matriculación de:  ${nombreSolicitante} </Pdf>";
        $this->documentacion->agregaDocumento($documento);
    }

}