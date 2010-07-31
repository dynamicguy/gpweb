<?php

namespace Symfony\Framework\FoundationBundle;

use Symfony\Components\DependencyInjection\ContainerInterface;
use Symfony\Components\HttpKernel\Profiler\Profiler as BaseProfiler;
use Symfony\Components\HttpKernel\Profiler\ProfilerStorage;
use Symfony\Components\HttpKernel\LoggerInterface;

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * Profiler.
 *
 * @package    Symfony
 * @subpackage Framework_FoundationBundle
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 */
class Profiler extends BaseProfiler
{
    protected $container;

    public function __construct(ContainerInterface $container, ProfilerStorage $profilerStorage, LoggerInterface $logger = null)
    {
        parent::__construct($profilerStorage, $logger);

        $this->container = $container;
        $this->initCollectors();
        $this->loadCollectorData();
    }

    protected function initCollectors()
    {
        $config = $this->container->findAnnotatedServiceIds('data_collector');
        $ids = array();
        $coreCollectors = array();
        $userCollectors = array();
        foreach ($config as $id => $attributes) {
            $collector = $this->container->getService($id);
            $collector->setProfiler($this);

            if (isset($attributes[0]['core']) && $attributes[0]['core']) {
                $coreCollectors[$collector->getName()] = $collector;
            } else {
                $userCollectors[$collector->getName()] = $collector;
            }
        }

        $this->setCollectors(array_merge($coreCollectors, $userCollectors));
    }
}
