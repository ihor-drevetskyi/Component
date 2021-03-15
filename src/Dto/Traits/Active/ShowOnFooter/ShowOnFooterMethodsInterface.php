<?php

namespace ComponentBundle\Dto\Traits\Active\ShowOnFooter;

/**
 * Interface ShowOnFooterMethodsInterface
 * @package ComponentBundle\Dto\Traits\Active\ShowOnFooter
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface ShowOnFooterMethodsInterface
{
    /**
     * @return bool
     */
    public function isShowOnFooter(): bool;

    /**
     *
     */
    public function enableShowOnFooter(): void;

    /**
     *
     */
    public function disableShowOnFooter(): void;

    /**
     * @param bool $show_on_footer
     */
    public function setShowOnFooter(bool $show_on_footer): void;
}
