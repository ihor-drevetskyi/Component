<?php

namespace ComponentBundle\Dto\Traits\Active\ShowOnWebsite;

/**
 * Interface ShowOnWebsiteMethodsInterface
 * @package ComponentBundle\Dto\Traits\Active\ShowOnWebsite
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface ShowOnWebsiteMethodsInterface
{
    /**
     * @return bool
     */
    public function isShowOnWebsite(): bool;

    /**
     *
     */
    public function enableShowOnWebsite(): void;

    /**
     *
     */
    public function disableShowOnWebsite(): void;

    /**
     * @param bool $show_on_website
     */
    public function setShowOnWebsite(bool $show_on_website): void;
}
