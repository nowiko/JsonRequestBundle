<?php

namespace NW\JsonRequestBundle\Tests\DependencyInjection;

use NW\JsonRequestBundle\Tests\TestCase;
use NW\JsonRequestBundle\DependencyInjection\JsonRequestExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class JsonRequestExtensionTest extends TestCase
{
    public function testHasListener()
    {
        $container = new ContainerBuilder();
        $extension = new JsonRequestExtension();
        $listenerService = 'nw_json_request.request_transformer';
        $this->assertInstanceOf(Extension::class, $extension);
        $extension->load([], $container);
        $this->assertTrue($container->has($listenerService));
    }

    public function testAlias()
    {
        $extension = new JsonRequestExtension();
        $this->assertStringEndsWith('json_request', $extension->getAlias());
    }
}
