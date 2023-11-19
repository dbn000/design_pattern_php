<?php

namespace DesignPattern\Behavior\ChainOfResponsability;

use DesignPattern\Behavior\ChainOfResponsability\ChainOfResponsability;

class VehicleUserGuide extends UserGuideCOR
{
    protected ?string $description;

    public function __construct(string $description = null)
    {
        $this->description = $description;
    }
    protected function getDescription(): ?string
    {
        if ($this->description !== null) {
            return sprintf('Vehicle: %s', $this->description);
        }

        return null;
    }
}