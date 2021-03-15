<?php

namespace ComponentBundle\Model\Traits\Translatable;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\Translatable\Title\TitleMethodsTrait;

/**
 * Trait TitleTrait
 * @package ComponentBundle\Model\Traits\Translatable
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait TitleTrait
{
    use TitleMethodsTrait;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(max="255")
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    protected ?string $title = null;
}
