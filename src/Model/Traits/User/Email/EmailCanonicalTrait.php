<?php

namespace ComponentBundle\Model\Traits\User\Email;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\User\Email\Canonical\EmailCanonicalMethodTrait;

/**
 * Trait EmailCanonicalTrait
 * @package ComponentBundle\Model\Traits\User\Email
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait EmailCanonicalTrait
{
    use EmailCanonicalMethodTrait;

    /**
     * @var string|null
     * @Assert\Email()
     * @ORM\Column(name="email_canonical", type="string", length=255, nullable=true, unique=true)
     */
    protected ?string $emailCanonical = null;
}
