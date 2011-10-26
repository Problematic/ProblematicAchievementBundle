<?php

namespace Problematic\AchievementBundle\Event;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\EventDispatcher\Event;

class AchievementActivityEvent extends Event implements AchievementEventInterface
{

    protected $user;
    protected $action;

    public function __construct(UserInterface $user, $action)
    {
        $this->user = $user;
        $this->action = $action;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getAction()
    {
        return $this->action;
    }

}
