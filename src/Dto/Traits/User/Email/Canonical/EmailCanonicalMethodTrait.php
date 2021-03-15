<?php

namespace ComponentBundle\Dto\Traits\User\Email\Canonical;

use ComponentBundle\Helper\AbstractPrepareTextHelper;

/**
 * Trait EmailCanonicalMethodTrait
 * @package ComponentBundle\Dto\Traits\User\Email\Canonical
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait EmailCanonicalMethodTrait
{
    /**
     * Gets normalized email (should be used in search and sort queries).
     * @return string|null
     */
    public function getEmailCanonical(): ?string
    {
        return $this->emailCanonical;
    }

    /**
     * Sets the canonical email.
     * @param string|null $email_canonical
     */
    public function setEmailCanonical(?string $email_canonical = null): void
    {
        $this->emailCanonical = AbstractPrepareTextHelper::canonicalize($email_canonical);
    }
}
