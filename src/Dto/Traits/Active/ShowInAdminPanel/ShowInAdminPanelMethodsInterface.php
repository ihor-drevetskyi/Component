<?php

namespace ComponentBundle\Dto\Traits\Active\ShowInAdminPanel;

/**
 * Interface ShowInAdminPanelMethodsInterface
 * @package ComponentBundle\Dto\Traits\Active\ShowInAdminPanel
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface ShowInAdminPanelMethodsInterface
{
    /**
     * @return bool
     */
    public function isShowInAdminPanel(): bool;

    /**
     * @param bool $showInAdminPanel
     */
    public function setShowInAdminPanel(bool $showInAdminPanel): void;
}
