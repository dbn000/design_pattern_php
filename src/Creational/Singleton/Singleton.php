<?php

namespace DesignPattern\Creational\Singleton;

use DesignPattern\Creational\Singleton\SingletonInterface;

class Singleton implements SingletonInterface
{

    private static $instance;

    private function __construct()
    {
    }

    public static function instance()
    {
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }

        return self::$instance;
    }
    private function __clone()
    {
    }
}
