<?php

namespace ComponentBundle\Dto\Traits\User\PhoneNumber;

/**
 * Trait PhoneNumberMethodsTrait
 * @package ComponentBundle\Dto\Traits\User\PhoneNumber
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait PhoneNumberMethodsTrait
{
    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return (empty($this->phoneNumber)) ? null : $this->phoneNumber;
    }

    /**
     * @param string|null $phone
     */
    public function setPhoneNumber(?string $phone = null): void
    {
        $this->phoneNumber = $phone;
    }
}
