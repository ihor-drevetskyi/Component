<?php

namespace ComponentBundle\Dto\Traits\User\Email\Blank;

use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\User\Email\GetEmailMethodTrait;

/**
 * Trait EmailBlankTrait
 * @package ComponentBundle\Dto\Traits\User\Email\Blank
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait EmailBlankTrait
{
    use GetEmailMethodTrait;
    use SetEmailBlankMethodTrait;

    /**
     * @var string|null
     * @Assert\Email()
     * @Assert\NotBlank()
     * @Assert\Length(max="255")
     */
    protected ?string $email = null;
}
