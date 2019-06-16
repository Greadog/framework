<?php

namespace Greadog\Kernel;

use League\Container\Container;

class Application
{

    const VERSION = '0.0.1';

    public $basePath;

    public $container;

    public function __construct($basePath)
    {
        $this->container = new Container();
        $this->setBasePath($basePath);
    }

    public function setBasePath($basePath)
    {
        $this->basePath = rtrim($basePath, '\/');
        $this->bindPathsInContainer();
    }

    protected function bindPathsInContainer()
    {
        $this->container->add('path.app', $this->basePath . DIRECTORY_SEPARATOR . 'app');
        $this->container->add('path.config', $this->basePath . DIRECTORY_SEPARATOR . 'config');
    }


    public function registerCoreContainerAliases()
    {

    }
}