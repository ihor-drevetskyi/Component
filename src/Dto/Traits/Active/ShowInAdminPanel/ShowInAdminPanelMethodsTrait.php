<?php

namespace ComponentBundle\Dto\Traits\Active\ShowInAdminPanel;

/**
 * Trait ShowInAdminPanelMethodsTrait
 * @package ComponentBundle\Dto\Traits\Active\ShowInAdminPanel
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ShowInAdminPanelMethodsTrait
{
    /**
     * @return bool
     */
    public function isShowInAdminPanel(): bool
    {
        return $this->showInAdminPanel;
    }

    /**
     * @param bool $showInAdminPanel
     */
    public function setShowInAdminPanel(bool $showInAdminPanel): void
    {
        $this->showInAdminPanel = $showInAdminPanel;
    }
}
