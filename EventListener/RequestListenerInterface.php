<?php

namespace NW\JsonRequestBundle\EventListener;

use Symfony\Component\HttpKernel\Event\RequestEvent;

interface RequestListenerInterface
{
    /**
     * @param RequestEvent $event
     */
    public function onKernelRequest(RequestEvent $event): void;
}
