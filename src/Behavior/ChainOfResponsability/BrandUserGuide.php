<?php

namespace DesignPattern\Behavior\ChainOfResponsability;

use DesignPattern\Behavior\ChainOfResponsability\ChainOfResponsability;

class BrandUserGuide extends UserGuideCOR
{
    protected string $name;
    protected string $description;
    protected ?string $additionalInfo;

    public function __construct(string $name, string $description, string $additionalInfo)
    {
        $this->name = $name;
        $this->description = $description;
        $this->additionalInfo = $additionalInfo;
    }
    protected function getDescription(): ?string
    {
        if ($this->additionalInfo !== null) {
            return sprintf('Model: %s, Description: %s, AdditionalInfo: %s', $this->name, $this->description, $this->additionalInfo);
        }

        return null;
    }
}