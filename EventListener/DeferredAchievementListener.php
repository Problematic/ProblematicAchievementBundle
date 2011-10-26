<?php

namespace Problematic\AchievementBundle\EventListener;

use Problematic\AchievementBundle\Event\AchievementEventInterface;
use Problematic\AchievementBundle\Model\ActivityManagerInterface;
use Problematic\AchievementBundle\Model\ActionManagerInterface;

class DeferredAchievementListener implements AchievementListenerInterface
{

    protected $activityManager;
    protected $actionManager;

    public function __construct(ActivityManagerInterface $activityManager, ActionManagerInterface $actionManager)
    {
        $this->activityManager = $activityManager;
        $this->actionManager = $actionManager;
    }

    public function onAchievementActivity(AchievementEventInterface $event)
    {
        $action = $event->getAction();
        $action = is_string($action) ? $this->actionManager->findOneByName($action) : $action;
        $activity = $this->activityManager->createActivity();
        $activity->setUser($event->getUser());
        $activity->setAction($action);
        $this->activityManager->addActivity($activity);
    }

}
