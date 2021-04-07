<?php

namespace ComponentBundle\Model\Traits\Active;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\YesOrNoInterface;
use ComponentBundle\Dto\Traits\Active\ShowInAdminPanel\ShowInAdminPanelMethodsTrait;

/**
 * Trait ShowInAdminPanelTrait
 * @package ComponentBundle\Model\Traits\Active
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ShowInAdminPanelTrait
{
    use ShowInAdminPanelMethodsTrait;

    /**
     * @var boolean
     * @ORM\Column(name="show_in_admin_panel", type="boolean", nullable=false, options={"default" : 1})
     */
    protected bool $showInAdminPanel = YesOrNoInterface::YES;
}
