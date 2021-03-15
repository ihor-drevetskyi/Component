<?php

namespace ComponentBundle\Dto\Traits\Date\CredentialsExpireAt;

use DateTimeInterface;

/**
 * Trait CredentialsExpireAtMethodsTrait
 * @package ComponentBundle\Dto\Traits\Date\CredentialsExpireAt
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait CredentialsExpireAtMethodsTrait
{
    /**
     * @return DateTimeInterface|null
     */
    public function getCredentialsExpireAt(): ?DateTimeInterface
    {
        return $this->credentialsExpireAt;
    }

    /**
     * @param DateTimeInterface|null $date
     */
    public function setCredentialsExpireAt(?DateTimeInterface $date = null): void
    {
        $this->credentialsExpireAt = $date;
    }
}
