<?php

namespace Problematic\AchievementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Problematic\AchievementBundle\Model\Activity as BaseActivity;

/**
 * @ORM\MappedSuperclass
 */
abstract class Activity extends BaseActivity
{

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

}
