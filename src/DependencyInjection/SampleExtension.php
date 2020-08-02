<?php

namespace DM\SampleBundle\DependencyInjection; // TODO : change namespace

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class SampleExtension extends Extension // TODO : change for your class, must be suffixed by Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
        
        // define the must be tree
        $configuration = $this->getConfiguration($configs, $container) ?? new Configuration();
        // construct and compare the tree with receive configs
        $config = $this->processConfiguration($configuration, $configs);
        // inject the dynamic's arguments by classes
        $definition = $container->getDefinition('dm_sample.sample');
        // can use (int,$config[] ) where int = position number of entry but so restrictif
        // config_sample must be CONFIG_SAMPLE in a /config/packages/sample.yaml
        $definition->setArgument('$sample', $config['config_sample']);
    }
}
