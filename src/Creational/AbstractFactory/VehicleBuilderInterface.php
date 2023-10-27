<?php

declare(strict_types=1);

namespace DesignPattern\Creational\AbstractFactory;

use DesignPattern\Creational\AbstractFactory\AbstractCar;
use DesignPattern\Creational\AbstractFactory\AbstractScooter;

interface VehicleBuilderInterface
{
    public function createCar(
        string $brand,
        string $color,
        int $engine,
        float $cabinSpace
    ): AbstractCar;

    public function createScooter(
        string $brand,
        string $color,
        int $engine
    ): AbstractScooter;
}