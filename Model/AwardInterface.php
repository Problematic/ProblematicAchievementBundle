<?php

namespace Problematic\AchievementBundle\Model;

use Symfony\Component\Security\Core\User\UserInterface;

interface AwardInterface
{

    public function getId();

    public function setCreatedAt(\DateTime $created_at);

    public function getCreatedAt();

    public function setUser(UserInterface $user);

    public function getUser();

    public function setAchievement(AchievementInterface $achievemnt);

    public function getAchievement();

}
