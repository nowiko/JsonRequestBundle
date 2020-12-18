<?php

namespace NW\JsonRequestBundle\Tests\DependencyInjection;

use NW\JsonRequestBundle\Tests\TestCase;
use NW\JsonRequestBundle\DependencyInjection\Configuration;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class ConfigurationTest extends TestCase
{
    public function testConfiguration()
    {
        $processor = new Processor();
        $configuration = new Configuration();
        $this->assertInstanceOf(ConfigurationInterface::class, $configuration);
        $configs = $processor->processConfiguration($configuration, []);
        $this->assertArraySubset([], $configs);
    }
}
