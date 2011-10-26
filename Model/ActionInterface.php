<?php

namespace Problematic\AchievementBundle\Model;

interface ActionInterface
{

    public function getId();

    public function setName($name);

    public function getName();

    public function setDescription($description);

    public function getDescription();

    public function addAchievement(AchievementInterface $achievement);

    public function getAchievements();

}
