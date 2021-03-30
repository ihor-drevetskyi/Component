<?php

namespace ComponentBundle\Repository\Filter;

/**
 * Class AbstractConstructFilter
 * @package ComponentBundle\Repository\Filter
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
abstract class AbstractConstructFilter implements AbstractConstructFilterInterface
{
    /**
     * @var string|null
     */
    protected ?string $locale = null;

    /**
     * @var bool
     */
    protected bool $use_position_sort = false;

    /**
     * @var bool
     */
    protected bool $use_publish_at_sort = false;

    /**
     * @var bool
     */
    protected bool $use_locale_condition = false;

    /**
     * @var bool
     */
    protected bool $use_publish_at_condition = false;

    /**
     * @var bool
     */
    protected bool $use_show_on_website_condition = false;

    /**
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * @return bool
     */
    public function isUsePositionSort(): bool
    {
        return $this->use_position_sort;
    }

    /**
     * @return bool
     */
    public function isUsePublishAtSort(): bool
    {
        return $this->use_publish_at_sort;
    }

    /**
     * @return bool
     */
    public function isUseLocaleCondition(): bool
    {
        return $this->use_locale_condition;
    }

    /**
     * @return bool
     */
    public function isUsePublishAtCondition(): bool
    {
        return $this->use_publish_at_condition;
    }

    /**
     * @param string|null $locale
     */
    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * @return bool
     */
    public function isUseShowOnWebsiteCondition(): bool
    {
        return $this->use_show_on_website_condition;
    }

    /**
     * @param bool $use_position_sort
     */
    public function setUsePositionSort(bool $use_position_sort): void
    {
        $this->use_position_sort = $use_position_sort;
    }

    /**
     * @param bool $use_publish_at_sort
     */
    public function setUsePublishAtSort(bool $use_publish_at_sort): void
    {
        $this->use_publish_at_sort = $use_publish_at_sort;
    }

    /**
     * @param bool $use_locale_condition
     */
    public function setUseLocaleCondition(bool $use_locale_condition): void
    {
        $this->use_locale_condition = $use_locale_condition;
    }

    /**
     * @param bool $use_publish_at_condition
     */
    public function setUsePublishAtCondition(bool $use_publish_at_condition): void
    {
        $this->use_publish_at_condition = $use_publish_at_condition;
    }

    /**
     * @param bool $use_show_on_website_condition
     */
    public function setUseShowOnWebsiteCondition(bool $use_show_on_website_condition): void
    {
        $this->use_show_on_website_condition = $use_show_on_website_condition;
    }
}
