<?php

namespace Problematic\AchievementBundle\Model;

abstract class ActivityManager implements ActivityManagerInterface
{

    public function createActivity()
    {
        $class = $this->getClass();
        $activity = new $class();

        return $activity;
    }

}
