<?php

namespace ComponentBundle\Dto\Traits\Active\ShowInAdminPanel;

use ComponentBundle\Dto\Traits\YesOrNoInterface;

/**
 * Trait ShowInAdminPanelTrait
 * @package ComponentBundle\Dto\Traits\Active\ShowInAdminPanel
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ShowInAdminPanelTrait
{
    use ShowInAdminPanelMethodsTrait;

    /**
     * @var bool
     */
    protected bool $showInAdminPanel = YesOrNoInterface::YES;
}
