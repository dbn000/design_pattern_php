<?php

declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\AbstractFactory\AbstractAutomovil;
use DesignPattern\Creational\AbstractFactory\AbstractScooter;
use DesignPattern\Creational\AbstractFactory\FabricaVehiculoGasolina;
use DesignPattern\Creational\AbstractFactory\FabricaVehiculoElectricidad;
use PHPUnit\Framework\TestCase;

/**
 * Class VehicleTest.
 *
 * @package DesignPattern\Creational\AbstractFactory
 */
class VehicleTest extends TestCase
{
    private const STRING_MARCA = "test_nombre";
    private const STRING_COLOR = "test_color";
    private const INT_POTENCIA = 5;
    private const FLOAT_ESPACIO =  1.1;

    /**
     * @testVehiculoGasolina
     */
    public function testVehiculoGasolina(): void
    {
        $fabricaVehiculoGasolina = new FabricaVehiculoGasolina();
        $automovilGasolina = $fabricaVehiculoGasolina->creaAutomovil(
            self::STRING_MARCA,
            self::STRING_COLOR,
            self::INT_POTENCIA,
            self::FLOAT_ESPACIO
        );

        $scooterGasolina = $fabricaVehiculoGasolina->creaScooter(
            self::STRING_MARCA,
            self::STRING_COLOR,
            self::INT_POTENCIA
        );

        $this->assertContainsOnlyInstancesOf(
            AbstractAutomovil::class, 
            [
                $automovilGasolina
            ]
        );
        $this->assertContainsOnlyInstancesOf(
            AbstractScooter::class, 
            [
                $scooterGasolina
            ]
        );

    }

    /**
     * @testVehiculoElectricidad
     */
    public function testVehiculoElectricidad(): void
    {
        $fabricaVehiculoElectricidad = new FabricaVehiculoElectricidad();
        $automovilElectricidad = $fabricaVehiculoElectricidad->creaAutomovil(
            self::STRING_MARCA,
            self::STRING_COLOR,
            self::INT_POTENCIA,
            self::FLOAT_ESPACIO
        );

        $scooterElectricidad = $fabricaVehiculoElectricidad->creaScooter(
            self::STRING_MARCA,
            self::STRING_COLOR,
            self::INT_POTENCIA
        );

        $this->assertContainsOnlyInstancesOf(
            AbstractAutomovil::class, 
            [
                $automovilElectricidad
            ]
        );
        $this->assertContainsOnlyInstancesOf(
            AbstractScooter::class, 
            [
                $scooterElectricidad
            ]
        );

    }
}
