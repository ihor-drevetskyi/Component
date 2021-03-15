<?php

namespace ComponentBundle\Dto\Traits\User\Email;

/**
 * Trait GetEmailMethodTrait
 * @package ComponentBundle\Dto\Traits\User\Email
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait GetEmailMethodTrait
{
    /**
     * Gets email.
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
}
