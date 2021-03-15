<?php

namespace ComponentBundle\Dto\Traits\Active\ShowOnFooter;

use ComponentBundle\Dto\Traits\YesOrNoInterface;

/**
 * Trait ShowOnFooterTrait
 * @package ComponentBundle\Dto\Traits\Active\ShowOnFooter
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ShowOnFooterTrait
{
    use ShowOnFooterMethodsTrait;

    /**
     * @var boolean
     */
    protected bool $showOnFooter = YesOrNoInterface::NO;
}
