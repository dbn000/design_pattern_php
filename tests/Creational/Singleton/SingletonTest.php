<?php

declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\Prototype\CertificadoCesion;
use DesignPattern\Creational\Prototype\DocumentacionCliente;
use DesignPattern\Creational\Prototype\DocumentacionEnBlanco;
use DesignPattern\Creational\Prototype\OrdenPedido;
use DesignPattern\Creational\Prototype\SolicitudMatriculacion;
use PHPUnit\Framework\TestCase;

/**
 * Class VehicleTest.
 *
 * @package DesignPattern\Creational\Prototype
 */
class SingletonTest extends TestCase
{

    /**
     * @testSingleton
     */
    public function testSingleton(): void
    {
        
        $documentacionEnBlanco = DocumentacionEnBlanco::getInstancia();

        $totalDocuments = 3;

        // 3 Documentos iniciales
        $documentacionEnBlanco->agrega(new OrdenPedido());
        $documentacionEnBlanco->agrega(new CertificadoCesion());
        $documentacionEnBlanco->agrega(new SolicitudMatriculacion());

        // Solicita instancia nueva pero recibe la misma ya creada Singleton
        // 4 Documentos a nueva instancia
        $totalDocuments += 4;
        $testSingleton = DocumentacionEnBlanco::getInstancia();
        $testSingleton->agrega(new SolicitudMatriculacion());
        $testSingleton->agrega(new SolicitudMatriculacion());
        $testSingleton->agrega(new SolicitudMatriculacion());
        $testSingleton->agrega(new SolicitudMatriculacion());

        $this->assertCount($totalDocuments, $testSingleton->getDocumentos());

    }
}
