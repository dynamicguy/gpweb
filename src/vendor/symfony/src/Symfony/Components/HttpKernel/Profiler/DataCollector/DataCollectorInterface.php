<?php

namespace Symfony\Components\HttpKernel\Profiler\DataCollector;

use Symfony\Components\HttpKernel\Profiler\Profiler;

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * DataCollectorInterface.
 *
 * @package    Symfony
 * @subpackage Components_HttpKernel
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 */
interface DataCollectorInterface
{
    function getData();

    function setData($data);

    function getName();

    function collect();

    function setProfiler(Profiler $profiler);
}
