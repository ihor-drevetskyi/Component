<?php

namespace ComponentBundle\Model\Traits\User\PhoneNumber;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\User\PhoneNumber\PhoneNumberMethodsTrait;

/**
 * Trait PhoneNumberTrait
 * @package ComponentBundle\Model\Traits\User\PhoneNumber
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait PhoneNumberTrait
{
    use PhoneNumberMethodsTrait;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @ORM\Column(name="phone_number", type="string", length=255, nullable=false)
     */
    protected ?string $phoneNumber = null;
}
