<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Prototype;

use DesignPattern\Creational\Prototype\CertificadoCesion;
use DesignPattern\Creational\Prototype\DocumentacionCliente;
use DesignPattern\Creational\Prototype\DocumentacionEnBlanco;
use DesignPattern\Creational\Prototype\OrdenPedido;
use DesignPattern\Creational\Prototype\SolicitudMatriculacion;

class PrototipeTestLauncher {

    public function __construct()
    {
        $documentacionEnBlanco = DocumentacionEnBlanco::getInstancia();
        $documentacionEnBlanco->agrega(new OrdenPedido());
        $documentacionEnBlanco->agrega(new CertificadoCesion());
        $documentacionEnBlanco->agrega(new SolicitudMatriculacion());

        $documentacionEnBlanco = new DocumentacionCliente('Manuel Fuentes');
        $documentacionEnBlanco->muestra();
        $documentacionEnBlanco->imprime();
    }
}