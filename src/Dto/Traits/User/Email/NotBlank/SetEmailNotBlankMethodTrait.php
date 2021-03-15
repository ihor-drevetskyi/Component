<?php

namespace ComponentBundle\Dto\Traits\User\Email\NotBlank;

/**
 * Trait SetEmailNotBlankMethodTrait
 * @package ComponentBundle\Dto\Traits\User\Email\NotBlank
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait SetEmailNotBlankMethodTrait
{
    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}
