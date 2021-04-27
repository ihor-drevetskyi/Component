<?php

namespace ComponentBundle\Model\Traits\Translatable\Slug;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\Translatable\Slug\SlugMethodsTrait;

/**
 * Trait SlugTrait
 * @package ComponentBundle\Model\Traits\Translatable\Slug
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait SlugTrait
{
    use SlugMethodsTrait;

    /**
     * @var string|null
     * @Assert\Length(max="255")
     * @ORM\Column(name="slug", type="string", length=255, nullable=true, unique=false)
     */
    protected ?string $slug = null;
}
