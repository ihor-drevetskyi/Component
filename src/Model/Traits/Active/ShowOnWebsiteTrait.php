<?php

namespace ComponentBundle\Model\Traits\Active;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\YesOrNoInterface;
use ComponentBundle\Dto\Traits\Active\ShowOnWebsite\ShowOnWebsiteMethodsTrait;

/**
 * Trait ShowOnWebsiteTrait
 * @package ComponentBundle\Model\Traits\Active
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ShowOnWebsiteTrait
{
    use ShowOnWebsiteMethodsTrait;

    /**
     * @var boolean
     * @ORM\Column(name="show_on_website", type="boolean", nullable=false, options={"default" : 1})
     */
    protected bool $showOnWebsite = YesOrNoInterface::YES;
}
