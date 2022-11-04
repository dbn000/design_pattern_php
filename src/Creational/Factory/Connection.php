<?php

namespace DesignPattern\Creational\Factory;

class Connection implements ConnectionInterface
{

    public const VALUE_STRING_CONNECTED = 'connected';
    public const VALUE_STRING_DISCONNECTED = 'dicconnected';

    public function createConnection()
    {
        return self::VALUE_STRING_CONNECTED;
    }
    public function deleteConnection()
    {
        return self::VALUE_STRING_DISCONNECTED;
    }
}
