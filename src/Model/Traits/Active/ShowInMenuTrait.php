<?php

namespace ComponentBundle\Model\Traits\Active;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\YesOrNoInterface;
use ComponentBundle\Dto\Traits\Active\ShowInMenu\ShowInMenuMethodsTrait;

/**
 * Trait ShowInMenuTrait
 * @package ComponentBundle\Model\Traits\Active
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ShowInMenuTrait
{
    use ShowInMenuMethodsTrait;

    /**
     * @var boolean
     * @ORM\Column(name="show_in_menu", type="boolean", nullable=false, options={"default" : 1})
     */
    protected bool $showInMenu = YesOrNoInterface::YES;
}
