<?php

namespace DM\SampleBundle\DependencyInjection; // TODO : change for your Namespace\DependencyInjection


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        /*
        $treeBuilder = new TreeBuilder('dm_sample'); // TODO : change for define validation of arguments
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->booleanNode('argument')->defaultTrue()->info('Whether or not you believe in argument')->end()
            ->end()
        ;

        return $treeBuilder;
        */
    }
}
