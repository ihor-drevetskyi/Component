<?php

namespace ComponentBundle\Model\Traits\User\Email;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\User\Email\GetEmailMethodTrait;
use ComponentBundle\Dto\Traits\User\Email\NotBlank\SetEmailNotBlankMethodTrait;

/**
 * Trait EmailNotBlankUniqueTrait
 * @package ComponentBundle\Model\Traits\User\Email
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait EmailNotBlankUniqueTrait
{
    use GetEmailMethodTrait;
    use SetEmailNotBlankMethodTrait;

    /**
     * @var string|null
     * @Assert\Email()
     * @Assert\NotBlank()
     * @Assert\Length(max="255")
     * @ORM\Column(name="email", type="string", length=255, nullable=false, unique=true)
     */
    protected ?string $email = null;
}
