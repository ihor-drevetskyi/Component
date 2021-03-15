<?php

namespace ComponentBundle\Dto\Traits\User\Email\Blank;

/**
 * Interface SetEmailBlankMethodInterface
 * @package ComponentBundle\Dto\Traits\User\Email\Blank
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface SetEmailBlankMethodInterface
{
    /**
     * Sets the email.
     * @param string|null $email
     */
    public function setEmail(?string $email = null): void;
}
