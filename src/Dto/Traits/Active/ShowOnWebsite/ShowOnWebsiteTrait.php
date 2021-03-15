<?php

namespace ComponentBundle\Dto\Traits\Active\ShowOnWebsite;

use ComponentBundle\Dto\Traits\YesOrNoInterface;

/**
 * Trait ShowOnWebsiteTrait
 * @package ComponentBundle\Dto\Traits\Active\ShowOnWebsite
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ShowOnWebsiteTrait
{
    use ShowOnWebsiteMethodsTrait;

    /**
     * @var bool
     */
    protected bool $showOnWebsite = YesOrNoInterface::YES;
}
