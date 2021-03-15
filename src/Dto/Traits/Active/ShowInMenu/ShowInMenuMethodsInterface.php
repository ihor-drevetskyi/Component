<?php

namespace ComponentBundle\Dto\Traits\Active\ShowInMenu;

/**
 * Interface ShowInMenuMethodsInterface
 * @package ComponentBundle\Dto\Traits\Active\ShowInMenu
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface ShowInMenuMethodsInterface
{
    /**
     * @return bool|null
     */
    public function isShowInMenu(): ?bool;

    /**
     * @param bool $show_in_menu
     */
    public function setShowInMenu(bool $show_in_menu): void;
}
