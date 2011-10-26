<?php

namespace Problematic\AchievementBundle\Model;

use Symfony\Component\Security\Core\User\UserInterface;

abstract class Activity implements ActivityInterface
{

    protected $id;
    protected $created_at;
    protected $user;
    protected $action;

    public function getId()
    {
        return $this->id;
    }

    public function setCreatedAt(\DateTime $created_at)
    {
        $this->created_at = $created_at;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setUser(UserInterface $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setAction(ActionInterface $action)
    {
        $this->action = $action;
    }

    public function getAction()
    {
        return $this->action;
    }

}
