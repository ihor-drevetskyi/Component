<?php

namespace ComponentBundle\Model\Traits\User\Username;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\User\Username\UsernameMethodsTrait;

/**
 * Trait UsernameTrait
 * @package ComponentBundle\Model\Traits\User\Username
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait UsernameTrait
{
    use UsernameMethodsTrait;

    /**
     * @var string|null
     * @ORM\Column(name="username", type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    protected ?string $username = null;
}
