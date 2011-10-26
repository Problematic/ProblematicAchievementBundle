<?php

namespace Problematic\AchievementBundle\Model;

interface AwardManagerInterface
{

    /**
     * @return AwardInterface
     */
    function createAward();

    function getClass();

}
