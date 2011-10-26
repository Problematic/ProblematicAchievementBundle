<?php

namespace Problematic\AchievementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Problematic\AchievementBundle\Model\Achievement as BaseAchievement;

/**
 * @ORM\MappedSuperclass
 */
abstract class Achievement extends BaseAchievement
{

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

}
