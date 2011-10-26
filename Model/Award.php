<?php

namespace Problematic\AchievementBundle\Model;

use Symfony\Component\Security\Core\User\UserInterface;

abstract class Award implements AwardInterface
{

    protected $id;
    protected $created_at;
    protected $user;
    protected $achievement;

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

    public function setAchievement(AchievementInterface $achievemnt)
    {
        $this->achievement = $achievemnt;
    }

    public function getAchievement()
    {
        return $this->achievement;
    }

}
