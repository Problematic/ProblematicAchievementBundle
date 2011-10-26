<?php

namespace Problematic\AchievementBundle\Model;

abstract class AchievementManager implements AchievementManagerInterface
{

    public function createAchievement()
    {
        $class = $this->getClass();
        $achievement = new $class();

        return $achievement;
    }

}
