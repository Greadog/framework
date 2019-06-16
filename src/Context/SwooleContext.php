<?php

namespace Greadog\Context;

use Swoole\Coroutine;


class SwooleContext implements ContextInterface
{
    protected $context;

    public function __construct()
    {
        $this->context = new Coroutine\Context();
    }

    public function get(string $key)
    {
        return $this->context[$key] ?? null;
    }

    public function put(string $key, $item)
    {
        return $this->context[$key] = $item;
    }

    public function delete(string $key): void
    {
        unset($this->context[$key]);
        return;
    }
}