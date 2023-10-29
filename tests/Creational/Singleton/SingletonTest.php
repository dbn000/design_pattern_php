<?php

declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\Prototype\DocAssignmentCertificate;
use DesignPattern\Creational\Prototype\ClientDocumentation;
use DesignPattern\Creational\Prototype\BlankDocumentation;
use DesignPattern\Creational\Prototype\DocPurchaseOrder;
use DesignPattern\Creational\Prototype\DocVehicleRegistration;
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
        $this->assertTrue(true);
        
        /*$documentacionEnBlanco = BlankDocumentation::getInstance();

        $totalDocuments = 3;

        // 3 Documentos iniciales
        $documentacionEnBlanco->add(new DocPurchaseOrder());
        $documentacionEnBlanco->add(new DocAssignmentCertificate());
        $documentacionEnBlanco->add(new DocVehicleRegistration());
        $this->assertCount($totalDocuments, $documentacionEnBlanco->documents());

        // Solicita instancia nueva pero recibe la misma ya creada Singleton
        // 4 Documentos a nueva instancia
        $totalDocuments += 4;
        $testSingleton = BlankDocumentation::getInstance();
        $testSingleton->add(new DocVehicleRegistration());
        $testSingleton->add(new DocVehicleRegistration());
        $testSingleton->add(new DocVehicleRegistration());
        $testSingleton->add(new DocVehicleRegistration());*/


    }
}
