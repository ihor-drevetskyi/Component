<?php

namespace ComponentBundle\Dto\Traits\Translatable\ShortDescription;

/**
 * Interface ShortDescriptionMethodsInterface
 * @package ComponentBundle\Dto\Traits\Translatable\ShortDescription
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface ShortDescriptionMethodsInterface
{
    /**
     * @return string|null
     */
    public function getShortDescription(): ?string;

    /**
     * @param string|null $short_description
     */
    public function setShortDescription(?string $short_description): void;

    /**
     * @return string|null
     */
    public function getShortDescriptionStripped(): ?string;
}
