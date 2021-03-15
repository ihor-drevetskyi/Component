<?php

namespace ComponentBundle\Dto\Traits\User\PhoneNumber;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait PhoneNumberTrait
 * @package ComponentBundle\Dto\Traits\User\PhoneNumber
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait PhoneNumberTrait
{
    use PhoneNumberMethodsTrait;

    /**
     * @var string|null
     * @Assert\NotBlank()
     */
    protected ?string $phoneNumber = null;
}
