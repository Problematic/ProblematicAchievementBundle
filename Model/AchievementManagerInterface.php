<?php

namespace Problematic\AchievementBundle\Model;

interface AchievementManagerInterface
{

    /**
     * @return AchievementInterface
     */
    function createAchievement();

    function getClass();

}
