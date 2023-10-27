<?php

declare(strict_types=1);

namespace DesignPattern\Creational\AbstractFactory;

use DesignPattern\Creational\AbstractFactory\AbstractCar;

class ElectricCar extends AbstractCar
{
    public function getData(): void
    {
        echo json_encode([
            'bran' => $this->bran,
            'color' => $this->color,
            'engine' => $this->engine,
            '$this->cabinSpace' => $this->cabinSpace,
        ]);
    }
}