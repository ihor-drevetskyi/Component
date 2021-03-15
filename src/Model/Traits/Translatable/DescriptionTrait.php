<?php

namespace ComponentBundle\Model\Traits\Translatable;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\Translatable\Description\DescriptionMethodsTrait;

/**
 * Trait DescriptionTrait
 * @package ComponentBundle\Model\Traits\Translatable
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait DescriptionTrait
{
    use DescriptionMethodsTrait;

    /**
     * @var string|null
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    protected ?string $description = null;

    /**
     * @var string|null
     */
    protected ?string $descriptionStripped = null;
}
