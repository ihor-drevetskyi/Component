<?php

namespace ComponentBundle\Model\Traits\Translatable\Slug;

use Knp\DoctrineBehaviors\Model\Sluggable\SluggableTrait;

/**
 * Trait SlugUniqueFalseTrait
 * @package ComponentBundle\Model\Traits\Translatable\Slug
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait SlugUniqueFalseTrait
{
    use SluggableTrait;

    /**
     * @return string[]
     */
    public function getSluggableFields(): array
    {
        return ['title'];
    }

    /**
     * @return bool
     */
    public function shouldGenerateUniqueSlugs(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    private function shouldRegenerateSlugOnUpdate(): bool
    {
        return false;
    }
}
