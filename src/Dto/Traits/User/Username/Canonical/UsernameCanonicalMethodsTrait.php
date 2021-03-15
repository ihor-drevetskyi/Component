<?php

namespace ComponentBundle\Dto\Traits\User\Username\Canonical;

use ComponentBundle\Helper\AbstractPrepareTextHelper;

/**
 * Trait UsernameCanonicalMethodsTrait
 * @package ComponentBundle\Dto\Traits\User\Username\Canonical
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait UsernameCanonicalMethodsTrait
{
    /**
     * Gets normalized username (should be used in search and sort queries).
     * @return string|null
     */
    public function getUsernameCanonical(): ?string
    {
        return $this->usernameCanonical;
    }

    /**
     * Sets the canonical username.
     * @param string|null $username_canonical
     */
    public function setUsernameCanonical(?string $username_canonical = null): void
    {
        $this->usernameCanonical = AbstractPrepareTextHelper::canonicalize($username_canonical);
    }
}
