<?php

namespace DesignPattern\Creational\Singleton;

use DesignPattern\Creational\Singleton\SingletonInterface;

class UniqueDbConnection implements SingletonInterface
{

    private static $uniqueDbConnection;

    private function __construct()
    {
    }

    public static function instance()
    {
        if (!isset(self::$uniqueDbConnection)) {
            $c = __CLASS__;
            self::$uniqueDbConnection = new $c;
        }

        return self::$uniqueDbConnection;
    }
    private function __clone()
    {
    }
}
