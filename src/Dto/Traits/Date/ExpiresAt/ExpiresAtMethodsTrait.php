<?php

namespace ComponentBundle\Dto\Traits\Date\ExpiresAt;

use DateTime;
use DateTimeInterface;

/**
 * Trait ExpiresAtMethodsTrait
 * @package ComponentBundle\Dto\Traits\Date\ExpiresAt
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ExpiresAtMethodsTrait
{
    /**
     * @return DateTimeInterface|null
     */
    public function getExpiresAt(): ?DateTimeInterface
    {
        return $this->expiresAt;
    }

    /**
     * @param DateTimeInterface|null $date
     */
    public function setExpiresAt(?DateTimeInterface $date = null): void
    {
        $this->expiresAt = $date;
    }

    /**
     * @param DateTimeInterface|null $date
     * @return bool
     */
    protected function hasExpired(?DateTimeInterface $date): bool
    {
        return null !== $date && new DateTime() >= $date;
    }
}
