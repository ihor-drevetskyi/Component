<?php

namespace ComponentBundle\Dto\Traits\Translatable\ShortDescription;

/**
 * Trait ShortDescriptionTrait
 * @package ComponentBundle\Dto\Traits\Translatable\ShortDescription
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ShortDescriptionTrait
{
    use ShortDescriptionMethodsTrait;

    /**
     * @var string|null
     */
    protected ?string $shortDescription = null;
}
