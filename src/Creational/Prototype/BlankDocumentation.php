<?php

declare (strict_types = 1);

namespace DesignPattern\Creational\Prototype;

class BlankDocumentation extends AbstractDocumentation {

    // Se implementa el patron Singleton para utilizar siempre el mismo document en blanco
    private static ?self $instance = null;

    public static function getInstance(): self
    {
        if (! self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    public function add(AbstractDocument $document): void
    {
        $this->documents[] = $document;
    }

    public function remove(AbstractDocument $document): void
    {
        if (false !== ($index = array_search($document, $this->documents, true))) {
            unset($this->documents[$index]);
        }
    }
}