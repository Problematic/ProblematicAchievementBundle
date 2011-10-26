<?php

namespace Problematic\AchievementBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class ProcessorCompilerPass implements CompilerPassInterface
{

    public function process(ContainerBuilder $container)
    {
        if (false === $container->hasDefinition('problematic_achievement.award_processor')) {
            return;
        }

        $definition = $container->getDefinition('problematic_achievement.award_processor');

        foreach ($container->findTaggedServiceIds('problematic_achievement.processor') as $id => $attributes) {
            $definition->addMethodCall('addProcessor', array(new Reference($id)));
        }
    }

}
