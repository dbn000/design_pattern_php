<?php

declare(strict_types=1);

namespace DesignPattern\Tests\Behavior;

use DesignPattern\Behavior\ChainOfResponsability\BrandUserGuide;
use DesignPattern\Behavior\ChainOfResponsability\ModelUserGuide;
use DesignPattern\Behavior\ChainOfResponsability\UserGuideCOR;
use DesignPattern\Behavior\ChainOfResponsability\VehicleUserGuide;
use PHPUnit\Framework\TestCase;

class ChainOfResponsabilityTest extends TestCase
{
    private const DESCRIPTION = 'Este es un nuevo vehiculo';
    private const VEHICLE_BRAND = 'Ford';
    private const VEHICLE_MODEL = 'Focus';

    public function testUserGuideNoDescription(): void
    {
        $vehicle = new VehicleUserGuide();
        $this->assertEquals(UserGuideCOR::DEFAULT_DESCRIPTION, $vehicle->returnDescription());
    }
    public function testUserGuide(): void
    {
        $model = new ModelUserGuide(self::VEHICLE_MODEL, self::DESCRIPTION);

        $vehicle = new VehicleUserGuide();
        $vehicle->addNext($model);

        $brand = new BrandUserGuide(self::VEHICLE_BRAND, self::VEHICLE_MODEL, self::DESCRIPTION);

        //echo $brand->returnDescription();


        /**
         * TODO: NO ME GUSTA LA FINALIDAD DE ESTA CADENA DE RESPONSABILIDAD
         * BIEN PODRIA SERVIR PARA UNA VALIDACION O UNA RECOPILACION DE DOCUMENTOS DE UN VEHICULO
         * LA FINALIDAD DE BUSCAR UN MANUAL DE USUARIO O DEVOLVER UNO POR DEFECTO NO ME PARECE LO MAS ADECUADO
         *
         * TODO: REFACTORIZAR Y DEFINIR UNA IDEA DIFERENTE PARA EL PATRON CHAIN OF RESPONSABILITY
         * Por ejemplo: Un calculador de precios?
         */






    }
}
