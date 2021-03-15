<?php

namespace ComponentBundle\Model\Traits\Translatable;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\Translatable\ShortTitle\ShortTitleMethodsTrait;

/**
 * Trait ShortTitleTrait
 * @package ComponentBundle\Model\Traits\Translatable
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ShortTitleTrait
{
    use ShortTitleMethodsTrait;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(max="255")
     * @ORM\Column(name="short_title", type="string", length=255, nullable=false)
     */
    protected ?string $shortTitle = null;
}
