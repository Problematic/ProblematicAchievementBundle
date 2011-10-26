<?php

namespace Problematic\AchievementBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Problematic\AchievementBundle\DependencyInjection\Compiler\ProcessorCompilerPass;

class ProblematicAchievementBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ProcessorCompilerPass());
    }
}
