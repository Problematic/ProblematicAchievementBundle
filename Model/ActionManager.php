<?php

namespace Problematic\AchievementBundle\Model;

abstract class ActionManager implements ActionManagerInterface
{

    public function createAction()
    {
        $class = $this->getClass();
        $action = new $class();

        return $action;
    }

}
