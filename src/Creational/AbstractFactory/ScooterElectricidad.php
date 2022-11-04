<?php

declare(strict_types=1);

namespace DesignPattern\Creational\AbstractFactory;

use DesignPattern\Creational\AbstractFactory\AbstractScooter;

class ScooterElectricidad extends AbstractScooter
{
    public function getData(): void
    {
        echo json_encode([
            'marca' => $this->marca,
            'color' => $this->color,
            'potencia' => $this->potencia,
        ]);
    }
}