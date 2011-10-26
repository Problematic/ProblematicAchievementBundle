<?php

namespace Problematic\AchievementBundle\Model;

interface AchievementInterface
{

    public function getId();

    public function setName($name);

    public function getName();

    public function setDescription($description);

    public function getDescription();

    public function addAction(ActionInterface $action);

    public function getActions();

}
