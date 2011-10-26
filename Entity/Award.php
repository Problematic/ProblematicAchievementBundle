<?php

namespace Problematic\AchievementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Problematic\AchievementBundle\Model\Award as BaseAward;

/**
 * @ORM\MappedSuperclass
 */
abstract class Award extends BaseAward
{

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

}
