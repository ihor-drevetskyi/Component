<?php

namespace ComponentBundle\Dto\Traits\Translatable\Description;

/**
 * Interface DescriptionMethodsInterface
 * @package ComponentBundle\Dto\Traits\Translatable\Description
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface DescriptionMethodsInterface
{
    /**
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description = null): void;

    /**
     * @return string|null
     */
    public function getDescriptionStripped(): ?string;
}
