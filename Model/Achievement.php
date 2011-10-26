<?php

namespace Problematic\AchievementBundle\Model;

abstract class Achievement implements AchievementInterface
{

    protected $id;
    protected $name;
    protected $description;
    protected $actions = array();

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

    public function addAction(ActionInterface $action)
    {
        $action->setAchievement($this);
        $this->actions[] = $action;
    }

    public function getActions()
    {
        return $this->actions;
    }

}
