<?php

namespace Problematic\AchievementBundle\Model;

interface ActivityManagerInterface
{

    /**
     * @return ActivityInterface
     */
    function createActivity();

    function addActivity(ActivityInterface $activity);

    function getClass();

}
