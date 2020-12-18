<?php

namespace NW\JsonRequestBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NWJsonRequestBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        return new DependencyInjection\JsonRequestExtension();
    }
}
