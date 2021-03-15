<?php

namespace ComponentBundle\Dto\Traits\Active\Toggleable;

use ComponentBundle\Dto\Traits\YesOrNoInterface;

/**
 * Class ToggleableTrait
 * @package ComponentBundle\Dto\Traits\Active\Toggleable
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ToggleableTrait
{
    use ToggleableMethodsTrait;

    /**
     * @var boolean
     */
    protected bool $enabled = YesOrNoInterface::YES;
}
