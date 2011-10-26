<?php

namespace Problematic\AchievementBundle\Model;

interface ActionManagerInterface
{

    /**
     * @return ActionInterface
     */
    function createAction();

    /**
     * @return ActionInterface
     */
    function findOneByName($name);

    function getClass();

}
