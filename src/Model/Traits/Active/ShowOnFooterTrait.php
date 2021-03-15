<?php

namespace ComponentBundle\Model\Traits\Active;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\YesOrNoInterface;
use ComponentBundle\Dto\Traits\Active\ShowOnFooter\ShowOnFooterMethodsTrait;

/**
 * Trait ShowOnFooterTrait
 * @package ComponentBundle\Model\Traits\Active
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ShowOnFooterTrait
{
    use ShowOnFooterMethodsTrait;

    /**
     * @var boolean
     * @ORM\Column(name="show_on_footer", type="boolean", nullable=false, options={"default" : 0})
     */
    protected bool $showOnFooter = YesOrNoInterface::NO;
}
