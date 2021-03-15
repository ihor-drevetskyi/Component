<?php

namespace ComponentBundle\Dto\Traits\User\Username;

/**
 * Trait UsernameMethodsTrait
 * @package ComponentBundle\Dto\Traits\User\Username
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait UsernameMethodsTrait
{
    /**
     * @return string|null
     */
    public function getUsername()
    {
        return (string)$this->username;
    }

    /**
     * Sets the username.
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }
}
