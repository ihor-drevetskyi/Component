<?php

namespace ComponentBundle\Model\Traits\User\Username;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\User\Username\Canonical\UsernameCanonicalMethodsTrait;

/**
 * Trait UsernameCanonicalTrait
 * @package ComponentBundle\Model\Traits\User\Username
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait UsernameCanonicalTrait
{
    use UsernameCanonicalMethodsTrait;

    /**
     * Normalized representation of a username.
     * @var string|null
     * @ORM\Column(name="username_canonical", type="string", length=255, nullable=true, unique=true)
     */
    protected ?string $usernameCanonical = null;
}
