<?php

namespace NW\JsonRequestBundle\DependencyInjection;

use NW\JsonRequestBundle\EventListener\RequestTransformerListener;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder('nw_json_request');
        $builder->getRootNode()
            ->children()
                ->arrayNode('listener')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('request_transformer')
                            ->defaultValue(RequestTransformerListener::class)
                        ->end()
                        ->scalarNode('priority')
                            ->defaultValue(100)
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $builder;
    }
}
