<?php

declare(strict_types=1);

namespace Gravatar\GravatarBundle\DependencyInjection;

use Gravatar\Gravatar;
use Gravatar\Twig\GravatarExtension as TwigGravatarExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Reference;

final class GravatarExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $container->setDefinition(
            'gravatarphp.gravatar',
            new Definition(Gravatar::class, [$configs['defaults'], $configs['secure']])
        );
        $container->setAlias(Gravatar::class, 'gravatarphp.gravatar');

        $container->setDefinition(
            TwigGravatarExtension::class,
            new Definition(
                TwigGravatarExtension::class,
                [new Reference('gravatarphp.gravatar')]
            )
        );
    }
}
