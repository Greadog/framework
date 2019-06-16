<?php

namespace Greadog\Context;
class Context implements ContextInterface
{
    public function get(string $key)
    {
        return $this->context()->get($key);
    }

    public function put(string $key, $value)
    {
        return $this->context->put($key, $value);
    }

    public function delete(string $key): void
    {
        $this->context->delete($key);
    }

    public function context()
    {
        return new SwooleContext();
    }
}