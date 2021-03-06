<?php

namespace FS\SolrBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('fs_solr');
		$rootNode->children()
					->arrayNode('solr')
						->children()
							->scalarNode('hostname')->defaultValue('localhost')->end()
							->scalarNode('port')->defaultValue('8983')->end()
							->scalarNode('login')->end()
							->scalarNode('password')->end()
						->end()
					->end()
					->scalarNode('entity_manager')->defaultValue('default')->end()	
				->end();
		

        return $treeBuilder;
    }
}
