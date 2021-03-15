<?php

namespace ComponentBundle\Dto\Traits\Translatable\Slug;

/**
 * Interface SlugMethodsInterface
 * @package ComponentBundle\Dto\Traits\Translatable\Slug
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface SlugMethodsInterface
{
    /**
     * @return string|null
     */
    public function getSlug(): ?string;

    /**
     * @param string $slug
     */
    public function setSlug(string $slug): void;
}
