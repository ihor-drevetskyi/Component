<?php

namespace ComponentBundle\Dto\Traits\User\Username\Canonical;

/**
 * Interface UsernameCanonicalMethodsInterface
 * @package ComponentBundle\Dto\Traits\User\Username\Canonical
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface UsernameCanonicalMethodsInterface
{
    /**
     * Gets normalized username (should be used in search and sort queries).
     * @return string|null
     */
    public function getUsernameCanonical(): ?string;

    /**
     * Sets the canonical username.
     * @param string|null $username_canonical
     */
    public function setUsernameCanonical(?string $username_canonical = null): void;
}
