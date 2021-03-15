<?php

namespace ComponentBundle\Model\Traits\Active;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\YesOrNoInterface;
use ComponentBundle\Dto\Traits\Active\Toggleable\ToggleableMethodsTrait;

/**
 * Trait ToggleableTrait
 * @package ComponentBundle\Model\Traits\Active
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ToggleableTrait
{
    use ToggleableMethodsTrait;

    /**
     * @var boolean
     * @ORM\Column(name="enabled", type="boolean", nullable=false, options={"default" : 1})
     */
    protected bool $enabled = YesOrNoInterface::YES;
}
