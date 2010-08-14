<?php

namespace Symfony\Components\HttpKernel\Listener;

use Symfony\Components\EventDispatcher\EventDispatcher;
use Symfony\Components\EventDispatcher\Event;
use Symfony\Components\HttpKernel\Response;
use Symfony\Components\HttpKernel\HttpKernelInterface;

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * ResponseFilter.
 *
 * @package    Symfony
 * @subpackage Framework_HttpKernel
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 */
class ResponseFilter
{
    /**
     * Registers a core.response listener to change the Content-Type header based on the Request format.
     *
     * @param Symfony\Components\EventDispatcher\EventDispatcher $dispatcher An EventDispatcher instance
     */
    public function register(EventDispatcher $dispatcher)
    {
        $dispatcher->connect('core.response', array($this, 'filter'));
    }

    /**
     * Filters the Response.
     *
     * @param Symfony\Components\EventDispatcher\Event $event    An Event instance
     * @param Symfony\Components\HttpKernel\Response   $response A Response instance
     */
    public function filter(Event $event, Response $response)
    {
        if (HttpKernelInterface::MASTER_REQUEST !== $event->getParameter('request_type') || $response->headers->has('Content-Type')) {
            return $response;
        }

        $request = $event->getParameter('request');
        $format = $request->getRequestFormat();
        if ((null !== $format) && $mimeType = $request->getMimeType($format)) {
            $response->headers->set('Content-Type', $mimeType);
        }

        return $response;
    }
}
