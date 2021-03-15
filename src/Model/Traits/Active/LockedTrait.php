<?php

namespace ComponentBundle\Model\Traits\Active;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\YesOrNoInterface;
use ComponentBundle\Dto\Traits\Active\Locked\LockedMethodsTrait;

/**
 * Trait LockedTrait
 * @package ComponentBundle\Model\Traits\Active
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait LockedTrait
{
    use LockedMethodsTrait;

    /**
     * @var boolean
     * @ORM\Column(name="locked", type="boolean", nullable=false, options={"default" : 0})
     */
    protected bool $locked = YesOrNoInterface::NO;
}
