<?php

namespace DesignPattern\Behavior\ChainOfResponsability;

use DesignPattern\Behavior\ChainOfResponsability\ChainOfResponsability;

class ModelUserGuide extends UserGuideCOR
{
    protected string $name;
    protected ?string $description;

    public function __construct(string $name, string $description = null)
    {
        $this->name = $name;
        $this->description = $description;
    }
    protected function getDescription(): ?string
    {
        if ($this->description !== null) {
            return sprintf('Model: %s, Description: %s', $this->name, $this->description);
        }

        return null;
    }
}