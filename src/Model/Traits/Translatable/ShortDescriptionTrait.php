<?php

namespace ComponentBundle\Model\Traits\Translatable;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\Translatable\ShortDescription\ShortDescriptionMethodsTrait;

/**
 * Trait ShortDescriptionTrait
 * @package ComponentBundle\Model\Traits\Translatable
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ShortDescriptionTrait
{
    use ShortDescriptionMethodsTrait;

    /**
     * @var string|null
     * @ORM\Column(name="short_description", type="text", nullable=true)
     */
    protected ?string $shortDescription = null;

    /**
     * @var string|null
     */
    protected ?string $shortDescriptionStripped = null;
}
