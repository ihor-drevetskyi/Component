<?php

namespace ComponentBundle\Dto\Traits\User\Username;

/**
 * Interface UsernameMethodsInterface
 * @package ComponentBundle\Dto\Traits\User\Username
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface UsernameMethodsInterface
{
    /**
     * @return string|null
     */
    public function getUsername();

    /**
     * Sets the username.
     * @param string $username
     */
    public function setUsername(string $username): void;
}
