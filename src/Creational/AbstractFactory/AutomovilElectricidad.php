<?php

declare(strict_types=1);

namespace DesignPattern\Creational\AbstractFactory;

use DesignPattern\Creational\AbstractFactory\AbstractAutomovil;

class AutomovilElectricidad extends AbstractAutomovil
{
    public function getData(): void
    {
        echo json_encode([
            'marca' => $this->marca,
            'color' => $this->color,
            'potencia' => $this->potencia,
            'espacio' => $this->espacio,
        ]);
    }
}