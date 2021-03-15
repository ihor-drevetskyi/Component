<?php

namespace ComponentBundle\Dto\Traits\Translatable\Description;

/**
 * Trait DescriptionTrait
 * @package ComponentBundle\Dto\Traits\Translatable\Description
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait DescriptionTrait
{
    use DescriptionMethodsTrait;

    /**
     * @var string|null
     */
    protected ?string $description = null;
}
