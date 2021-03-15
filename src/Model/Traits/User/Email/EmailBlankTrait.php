<?php

namespace ComponentBundle\Model\Traits\User\Email;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\User\Email\GetEmailMethodTrait;
use ComponentBundle\Dto\Traits\User\Email\Blank\SetEmailBlankMethodTrait;

/**
 * Trait EmailBlankTrait
 * @package ComponentBundle\Model\Traits\User\Email
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait EmailBlankTrait
{
    use GetEmailMethodTrait;
    use SetEmailBlankMethodTrait;

    /**
     * @var string|null
     * @Assert\Email()
     * @Assert\Length(max="255")
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    protected ?string $email = null;
}
