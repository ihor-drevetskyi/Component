<?php

namespace ComponentBundle\Dto\Traits\Active\ShowOnFooter;

use ComponentBundle\Dto\Traits\YesOrNoInterface;

/**
 * Trait ShowOnFooterMethodsTrait
 * @package ComponentBundle\Dto\Traits\Active\ShowOnFooter
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ShowOnFooterMethodsTrait
{
    /**
     * @return bool
     */
    public function isShowOnFooter(): bool
    {
        return $this->showOnFooter;
    }

    /**
     *
     */
    public function enableShowOnFooter(): void
    {
        $this->showOnFooter = YesOrNoInterface::YES;
    }

    /**
     *
     */
    public function disableShowOnFooter(): void
    {
        $this->showOnFooter = YesOrNoInterface::NO;
    }

    /**
     * @param bool $show_on_footer
     */
    public function setShowOnFooter(bool $show_on_footer): void
    {
        $this->showOnFooter = $show_on_footer;
    }
}
