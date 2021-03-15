<?php

namespace ComponentBundle\Dto\Traits\User\Email\NotBlank;

use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\User\Email\GetEmailMethodTrait;

/**
 * Trait EmailNotBlankTrait
 * @package ComponentBundle\Dto\Traits\User\Email\NotBlank
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait EmailNotBlankTrait
{
    use GetEmailMethodTrait;
    use SetEmailNotBlankMethodTrait;

    /**
     * @var string|null
     * @Assert\Email()
     * @Assert\NotBlank()
     * @Assert\Length(max="255")
     */
    protected ?string $email = null;
}
