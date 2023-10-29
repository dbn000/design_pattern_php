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
        // Recoge la instancia ya inicializada anteriormente
        $blankPrototype = BlankDocumentation::getInstance();

        // Segunda vez que se instancia  (Singleton)
        $this->assertNotEmpty($blankPrototype->documents());
    }
}
