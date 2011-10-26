<?php

namespace Problematic\AchievementBundle\Model;

abstract class AwardManager implements AwardManagerInterface
{

    public function createAward()
    {
        $class = $this->getClass();
        $award = new $class();

        return $award;
    }

}
