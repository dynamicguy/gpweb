<?php

namespace Bundle\UserBundle;

use Symfony\Foundation\Bundle\Bundle;
use Symfony\Components\DependencyInjection\ContainerInterface;
use Symfony\Components\DependencyInjection\Loader\Loader;
use Bundle\UserBundle\DependencyInjection\UserExtension;

class UserBundle extends Bundle
{

    public function buildContainer(ContainerInterface $container)
    {
        Loader::registerExtension(new UserExtension());
    }

}
