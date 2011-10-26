<?php

namespace Problematic\AchievementBundle\Entity;

use Problematic\AchievementBundle\Model\ActivityManager as BaseActivityManager;
use Doctrine\ORM\EntityManager;
use Problematic\AchievementBundle\Model\ActivityInterface;

class ActivityManager extends BaseActivityManager
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

    public function addActivity(ActivityInterface $activity)
    {
        $activity->setCreatedAt(new \DateTime());
        $this->em->persist($activity);
        $this->em->flush();
    }

    public function getClass()
    {
        return $this->class;
    }

}
