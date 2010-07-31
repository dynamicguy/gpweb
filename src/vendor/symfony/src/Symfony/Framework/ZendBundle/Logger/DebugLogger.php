<?php

namespace Symfony\Framework\ZendBundle\Logger;

use Zend\Log\Writer\AbstractWriter;

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * DebugLogger.
 *
 * @package    Symfony
 * @subpackage Framework_ZendBundle
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 */
class DebugLogger extends AbstractWriter
{
    protected $logs = array();

    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * Write a message to the log.
     *
     * @param array $event Event data
     */
    protected function _write($event)
    {
        $this->logs[] = $event;
    }

    static public function factory($config = array())
    {
    }
}
