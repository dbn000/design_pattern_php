<?php

namespace DesignPattern\Creational\Factory;

interface ConnectionInterface
{
    public function createConnection();
    public function deleteConnection();
}