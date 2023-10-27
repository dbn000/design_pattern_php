<?php

declare(strict_types=1);

namespace DesignPattern\Creational\AbstractFactory;

use DesignPattern\Creational\AbstractFactory\AbstractScooter;

class GasolineScooter extends AbstractScooter
{
    public function getData(): void
    {
        echo json_encode([
            'brand' => $this->brand,
            'color' => $this->color,
            'engine' => $this->engine,
        ]);
    }
}