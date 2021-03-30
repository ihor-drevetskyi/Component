<?php

namespace ComponentBundle\Repository\Filter;

/**
 * Interface AbstractConstructFilterInterface
 * @package ComponentBundle\Repository\Filter
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface AbstractConstructFilterInterface
{
    /**
     * @return string|null
     */
    public function getLocale(): ?string;

    /**
     * @return bool
     */
    public function isUsePositionSort(): bool;

    /**
     * @return bool
     */
    public function isUsePublishAtSort(): bool;

    /**
     * @return bool
     */
    public function isUseLocaleCondition(): bool;

    /**
     * @return bool
     */
    public function isUsePublishAtCondition(): bool;

    /**
     * @param string|null $locale
     */
    public function setLocale(?string $locale): void;

    /**
     * @return bool
     */
    public function isUseShowOnWebsiteCondition(): bool;

    /**
     * @param bool $use_position_sort
     */
    public function setUsePositionSort(bool $use_position_sort): void;

    /**
     * @param bool $use_publish_at_sort
     */
    public function setUsePublishAtSort(bool $use_publish_at_sort): void;

    /**
     * @param bool $use_locale_condition
     */
    public function setUseLocaleCondition(bool $use_locale_condition): void;

    /**
     * @param bool $use_publish_at_condition
     */
    public function setUsePublishAtCondition(bool $use_publish_at_condition): void;

    /**
     * @param bool $use_show_on_website_condition
     */
    public function setUseShowOnWebsiteCondition(bool $use_show_on_website_condition): void;
}
