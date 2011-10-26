<?php

namespace Problematic\AchievementBundle\Entity;

use Problematic\AchievementBundle\Model\ActionManager as BaseActionManager;
use Doctrine\ORM\EntityManager;

class ActionManager extends BaseActionManager
{

    protected $em;
    protected $repo;
    protected $class;

    public function __construct(EntityManager $em, $class)
    {
        $this->em = $em;
        $this->repo = $em->getRepository($class);
        $this->class = $class;
    }

    public function findOneByName($name)
    {
        return $this->repo->findOneByName($name);
    }

    public function getClass()
    {
        return $this->class;
    }

}
