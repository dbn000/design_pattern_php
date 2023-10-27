<?php

declare(strict_types=1);

namespace DesignPattern\Creational\AbstractFactory;

use DesignPattern\Creational\AbstractFactory\AbstractScooter;

class ElectricVehicleBuilder implements VehicleBuilderInterface
{
    public function createCar(
        string $brand,
        string $color,
        int $engine,
        float $cabinSpace
    ): AbstractCar {
        return new ElectricCar($brand, $color, $engine, $cabinSpace);
    }

    public function createScooter(
        string $brand,
        string $color,
        int $engine
    ): AbstractScooter {
        return new ElectricScooter($brand, $color, $engine);
    }
}
