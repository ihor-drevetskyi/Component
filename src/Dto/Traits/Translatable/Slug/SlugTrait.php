<?php

namespace ComponentBundle\Dto\Traits\Translatable\Slug;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait SlugTrait
 * @package ComponentBundle\Dto\Traits\Translatable\Slug
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait SlugTrait
{
    use SlugMethodsTrait;

    /**
     * @var string|null
     * @Assert\Length(max="255")
     */
    protected ?string $slug;
}
