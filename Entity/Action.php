<?php

namespace Problematic\AchievementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Problematic\AchievementBundle\Model\Action as BaseAction;

/**
 * @ORM\MappedSuperclass
 */
abstract class Action extends BaseAction
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
