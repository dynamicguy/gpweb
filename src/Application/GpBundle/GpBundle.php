<?php

namespace Application\GpBundle;

use Symfony\Foundation\Bundle\Bundle;
use Symfony\Components\DependencyInjection\ContainerInterface;
use Symfony\Components\DependencyInjection\Loader\Loader;
use Application\GpBundle\DependencyInjection\GpExtension;

class GpBundle extends Bundle
{

    public function buildContainer(ContainerInterface $container)
    {
        Loader::registerExtension(new GpExtension());
    }

}
