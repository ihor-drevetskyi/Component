<?php

namespace ComponentBundle\Dto\Traits\Active\ShowOnWebsite;

use ComponentBundle\Dto\Traits\YesOrNoInterface;

/**
 * Trait ShowOnWebsiteMethodsTrait
 * @package ComponentBundle\Dto\Traits\Active\ShowOnWebsite
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ShowOnWebsiteMethodsTrait
{
    /**
     * @return bool
     */
    public function isShowOnWebsite(): bool
    {
        return $this->showOnWebsite;
    }

    /**
     *
     */
    public function enableShowOnWebsite(): void
    {
        $this->showOnWebsite = YesOrNoInterface::YES;
    }

    /**
     *
     */
    public function disableShowOnWebsite(): void
    {
        $this->showOnWebsite = YesOrNoInterface::NO;
    }

    /**
     * @param bool $show_on_website
     */
    public function setShowOnWebsite(bool $show_on_website): void
    {
        $this->showOnWebsite = $show_on_website;
    }
}
