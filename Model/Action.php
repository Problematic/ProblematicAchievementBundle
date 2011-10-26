<?php

namespace Problematic\AchievementBundle\Model;

abstract class Action implements ActionInterface
{

    protected $id;
    protected $name;
    protected $description;
    protected $achievements = array();

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function addAchievement(AchievementInterface $achievement)
    {
        $this->achievements[] = $achievement;
    }

    public function getAchievements()
    {
        return $this->achievements;
    }

}
