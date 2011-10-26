<?php

namespace Problematic\AchievementBundle\Event;

use Symfony\Component\Security\Core\User\UserInterface;

interface AchievementEventInterface
{

    /**
     * @return UserInterface
     */
    function getUser();

    /**
     * @return mixed ActionInterface or string name
     */
    function getAction();

}
