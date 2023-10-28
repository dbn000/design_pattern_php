<?php

declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\AbstractFactory\AbstractCar;
use DesignPattern\Creational\AbstractFactory\AbstractScooter;
use DesignPattern\Creational\AbstractFactory\GasolineVehicleBuilder;
use DesignPattern\Creational\AbstractFactory\ElectricVehicleBuilder;
use PHPUnit\Framework\TestCase;

/**
 * Class VehicleTest.
 *
 * @package DesignPattern\Creational\AbstractFactory
 */
class AbstractFactoryTest extends TestCase
{
    private const STRING_BRAND = "test_nombre";
    private const STRING_COLOR = "test_color";
    private const INT_ENGINE = 5;
    private const FLOAT_CABIN_SPACE =  1.1;

    /**
     * @testVehiculoGasolina
     */
    public function testGasolineVehicle(): void
    {
        $gasolineBuilder = new GasolineVehicleBuilder();
        $gasolineVehicle = $gasolineBuilder->createCar(
            self::STRING_BRAND,
            self::STRING_COLOR,
            self::INT_ENGINE,
            self::FLOAT_CABIN_SPACE
        );

        $gasolineScooter = $gasolineBuilder->createScooter(
            self::STRING_BRAND,
            self::STRING_COLOR,
            self::INT_ENGINE
        );

        $this->assertContainsOnlyInstancesOf(
            AbstractCar::class,
            [
                $gasolineVehicle
            ]
        );
        $this->assertContainsOnlyInstancesOf(
            AbstractScooter::class, 
            [
                $gasolineScooter
            ]
        );

    }

    /**
     * @testVehiculoElectricidad
     */
    public function testElectricVehicle(): void
    {
        $electricBuilder = new ElectricVehicleBuilder();
        $electricCar = $electricBuilder->createCar(
            self::STRING_BRAND,
            self::STRING_COLOR,
            self::INT_ENGINE,
            self::FLOAT_CABIN_SPACE
        );

        $electricScooter = $electricBuilder->createScooter(
            self::STRING_BRAND,
            self::STRING_COLOR,
            self::INT_ENGINE
        );

        $this->assertContainsOnlyInstancesOf(
            AbstractCar::class,
            [
                $electricCar
            ]
        );
        $this->assertContainsOnlyInstancesOf(
            AbstractScooter::class, 
            [
                $electricScooter
            ]
        );

    }
}
