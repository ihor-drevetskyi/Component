<?php

namespace ComponentBundle\Dto\Traits\Translatable\Title;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait TitleTrait
 * @package ComponentBundle\Dto\Traits\Translatable\Title
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait TitleTrait
{
    use TitleMethodsTrait;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(max="255")
     */
    protected ?string $title = null;
}
