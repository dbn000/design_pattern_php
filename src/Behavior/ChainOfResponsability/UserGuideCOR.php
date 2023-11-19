<?php

declare(strict_types=1);

namespace DesignPattern\Behavior\ChainOfResponsability;

abstract class UserGuideCOR{

    public const DEFAULT_DESCRIPTION = 'Descripción por defecto';

    /**
     * Esta clase es el contrato que debe cumplir cada paso
     * para mostrar el manual de usuario
     * en la cadena de responsabilidad
     */

    protected self $next;


    abstract protected function getDescription(): ?string;


    public function returnDescription(): string
    {
        $result = $this->getDescription();
        if ($result !== null) {
            return $result;
        }

        if (isset($this->next))
        {
            return $this->next->returnDescription();
        }else{
            return $this->defaultDescription();
        }

        return $this->defaultDescription();
    }

    private function defaultDescription()
    {
        return self::DEFAULT_DESCRIPTION;
    }

    public function addNext(self $next): void
    {
        $this->next = $next;
    }


}