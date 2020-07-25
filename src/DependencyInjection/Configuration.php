<?php

declare(strict_types=1);

namespace Gravatar\GravatarBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('gravatar');

        /** @var ArrayNodeDefinition $routeNode */
        $routeNode = $treeBuilder->getRootNode();

        $routeNode->children()
            ->arrayNode('defaults')
            ->ignoreExtraKeys(false)
            ->end();

        $routeNode->children()
            ->booleanNode('secure')
            ->end();
        return $treeBuilder;
    }
}
