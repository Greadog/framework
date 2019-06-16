<?php

namespace Greadog\Facades;
abstract class Facade
{

    public static function __callStatic($method, $args)
    {
        $instance = new \Greadog\Context\Context();
        return $instance->$method(...$args);     //调用方法
    }
}