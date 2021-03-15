<?php

namespace ComponentBundle\Dto\Traits\Translatable\ShortTitle;

/**
 * Interface ShortTitleMethodsInterface
 * @package ComponentBundle\Dto\Traits\Translatable\ShortTitle
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface ShortTitleMethodsInterface
{
    /**
     * @return null|string
     */
    public function getShortTitle(): ?string;

    /**
     * @param string|null $short_title
     */
    public function setShortTitle(?string $short_title = null): void;
}
