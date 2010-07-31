<?php

namespace Application\GpBundle;

use Symfony\Foundation\Bundle\Bundle;
use Symfony\Components\DependencyInjection\ContainerInterface;
use Symfony\Components\DependencyInjection\Loader\Loader;
use Bundle\UserBundle\DependencyInjection\UserExtension;

class GpBundle extends Bundle
{

    public function buildContainer(ContainerInterface $container)
    {
        Loader::registerExtension(new GpExtension());
    }


}
