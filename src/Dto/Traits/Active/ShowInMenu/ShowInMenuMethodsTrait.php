<?php

namespace ComponentBundle\Dto\Traits\Active\ShowInMenu;

/**
 * Trait ShowInMenuMethodsTrait
 * @package ComponentBundle\Dto\Traits\Active\ShowInMenu
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ShowInMenuMethodsTrait
{
    /**
     * @return bool|null
     */
    public function isShowInMenu(): ?bool
    {
        return $this->showInMenu;
    }

    /**
     * @param bool $show_in_menu
     */
    public function setShowInMenu(bool $show_in_menu): void
    {
        $this->showInMenu = $show_in_menu;
    }
}
