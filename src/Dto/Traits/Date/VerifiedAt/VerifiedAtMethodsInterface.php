<?php

namespace ComponentBundle\Dto\Traits\Date\VerifiedAt;

use DateTimeInterface;

/**
 * Interface VerifiedAtMethodsInterface
 * @package ComponentBundle\Dto\Traits\Date\VerifiedAt
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface VerifiedAtMethodsInterface
{
    /**
     * @return bool
     */
    public function isVerified(): bool;

    /**
     * Get verifiedAt
     * @return DateTimeInterface
     */
    public function getVerifiedAt(): DateTimeInterface;

    /**
     * @param DateTimeInterface|null $verified_at
     */
    public function setVerifiedAt(?DateTimeInterface $verified_at = null): void;
}
