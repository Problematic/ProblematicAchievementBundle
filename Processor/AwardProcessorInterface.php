<?php

namespace Problematic\AchievementBundle\Processor;

use Doctrine\ORM\QueryBuilder;

interface AwardProcessorInterface
{

    function addProcessor(ProcessorInterface $processor);

    function execute();

}
