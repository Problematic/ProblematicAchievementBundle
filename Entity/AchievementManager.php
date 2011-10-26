<?php

namespace Problematic\AchievementBundle\Entity;

use Problematic\AchievementBundle\Model\AchievementManager as BaseAchievementManager;
use Doctrine\ORM\EntityManager;

class AchievementManager extends BaseAchievementManager
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

    public function getClass()
    {
        return $this->class;
    }

}
