<?php

namespace ComponentBundle\Dto\Traits\User\PhoneNumber;

/**
 * Interface PhoneNumberMethodsInterface
 * @package ComponentBundle\Dto\Traits\User\PhoneNumber
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface PhoneNumberMethodsInterface
{
    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string;

    /**
     * @param string|null $phone
     */
    public function setPhoneNumber(?string $phone = null): void;
}
