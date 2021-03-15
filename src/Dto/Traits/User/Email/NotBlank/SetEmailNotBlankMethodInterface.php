<?php

namespace ComponentBundle\Dto\Traits\User\Email\NotBlank;

/**
 * Interface SetEmailNotBlankMethodInterface
 * @package ComponentBundle\Dto\Traits\User\Email\NotBlank
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface SetEmailNotBlankMethodInterface
{
    /**
     * Sets the email.
     * @param string $email
     */
    public function setEmail(string $email): void;
}
