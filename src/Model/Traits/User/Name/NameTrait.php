<?php

namespace ComponentBundle\Model\Traits\User\Name;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\User\Name\NameMethodsTrait;

/**
 * Trait NameTrait
 * @package ComponentBundle\Model\Traits\User\Name
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait NameTrait
{
    use NameMethodsTrait;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    protected ?string $name = null;
}
