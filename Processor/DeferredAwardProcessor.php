<?php

namespace Problematic\AchievementBundle\Processor;

class DeferredAwardProcessor implements AwardProcessorInterface
{

    protected $processors = array();

    public function addProcessor(ProcessorInterface $processor)
    {
        $this->processors[] = $processor;
    }

    public function execute()
    {
        foreach ($this->processors as $processor) {
            $processor->process();
        }
    }

}
