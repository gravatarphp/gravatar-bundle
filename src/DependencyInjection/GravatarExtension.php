<?php

declare(strict_types=1);

namespace Gravatar\GravatarBundle\DependencyInjection;

use Gravatar\Gravatar;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Extension\Extension;

final class GravatarExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $container->setDefinition(
            'gravatarphp.gravatar',
            new Definition(Gravatar::class, [$configs['defaults'], $configs['secure']])
        );
        $container->setAlias(Gravatar::class, 'gravatarphp.gravatar');
    }
}
