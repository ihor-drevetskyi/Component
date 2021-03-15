<?php

namespace ComponentBundle\Dto\Traits\Translatable\Slug;

/**
 * Trait SlugMethodsTrait
 * @package ComponentBundle\Dto\Traits\Translatable\Slug
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait SlugMethodsTrait
{
    /**
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }
}
