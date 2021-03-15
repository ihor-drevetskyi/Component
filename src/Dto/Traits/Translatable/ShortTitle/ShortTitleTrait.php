<?php

namespace ComponentBundle\Dto\Traits\Translatable\ShortTitle;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait ShortTitleTrait
 * @package ComponentBundle\Dto\Traits\Translatable\ShortTitle
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ShortTitleTrait
{
    use ShortTitleMethodsTrait;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(max="255")
     */
    protected ?string $shortTitle = null;
}
