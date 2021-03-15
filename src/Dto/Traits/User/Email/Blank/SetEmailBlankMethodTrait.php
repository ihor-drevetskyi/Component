<?php

namespace ComponentBundle\Dto\Traits\User\Email\Blank;

/**
 * Trait SetEmailBlankMethodTrait
 * @package ComponentBundle\Dto\Traits\User\Email\Blank
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait SetEmailBlankMethodTrait
{
    /**
     * @param string|null $email
     */
    public function setEmail(?string $email = null): void
    {
        $this->email = $email;
    }
}
