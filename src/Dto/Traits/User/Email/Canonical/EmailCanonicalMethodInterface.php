<?php

namespace ComponentBundle\Dto\Traits\User\Email\Canonical;

/**
 * Interface EmailCanonicalMethodInterface
 * @package ComponentBundle\Dto\Traits\User\Email\Canonical
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface EmailCanonicalMethodInterface
{
    /**
     * Gets normalized email (should be used in search and sort queries).
     * @return string|null
     */
    public function getEmailCanonical(): ?string;

    /**
     * Sets the canonical email.
     * @param string|null $email_canonical
     */
    public function setEmailCanonical(?string $email_canonical = null): void;
}
