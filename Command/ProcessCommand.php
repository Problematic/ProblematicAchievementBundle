<?php

namespace Problematic\AchievementBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ProcessCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this
            ->setName('problematic:achievement:process')
            ->setDescription('Process and award deferred achievements')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->getContainer()->get('problematic_achievement.award_processor')->execute();
    }

}
