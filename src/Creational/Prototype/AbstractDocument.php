<?php

declare (strict_types = 1);

namespace DesignPattern\Creational\Prototype;

abstract class AbstractDocument {

    protected string $content;

    public function clone(): self
    {
        return clone $this;
    }

    public function fill(string $info): void
    {
        $this->content = $info;
    }

    public function showList(array $infoList): void
    {
        echo implode(' - ', $infoList);
        echo "<br/>";
    }

    abstract public function print(): void;
    abstract public function show(): void;
}