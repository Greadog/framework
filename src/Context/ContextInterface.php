<?php

namespace Greadog\Context;
interface ContextInterface
{
    public function get(string $key);

    public function put(string $key, $value);

    public function delete(string $key): void;
}