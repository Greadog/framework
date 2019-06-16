<?php

namespace Greadog\Facades;

class Context extends Facade
{
    protected static function getFacadeAccessor()
    {
        return new \Greadog\Context\Context();
    }

    protected static function type()
    {
        return "global";
    }
}