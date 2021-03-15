<?php

namespace ComponentBundle\Dto\Traits\Date\VerifiedAt;

use DateTime;
use DateTimeInterface;

/**
 * Trait VerifiedAtMethodsTrait
 * @package ComponentBundle\Dto\Traits\Date\VerifiedAt
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait VerifiedAtMethodsTrait
{
    /**
     * @return bool
     */
    public function isVerified(): bool
    {
        return null !== $this->verifiedAt;
    }

    /**
     * @return DateTimeInterface
     */
    public function getVerifiedAt(): DateTimeInterface
    {
        if (!$this->verifiedAt) {
            self::setVerifiedAt();
        }

        return $this->verifiedAt;
    }

    /**
     * @param DateTimeInterface|null $verified_at
     */
    public function setVerifiedAt(?DateTimeInterface $verified_at = null): void
    {
        if (!$verified_at) {
            $this->verifiedAt = new DateTime();
        } else {
            $this->verifiedAt = $verified_at;
        }
    }
}
