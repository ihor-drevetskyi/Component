<?php

namespace ComponentBundle\Dto\Traits\Date\CredentialsExpireAt;

use DateTimeInterface;

/**
 * Interface CredentialsExpireAtMethodsInterface
 * @package ComponentBundle\Dto\Traits\Date\CredentialsExpireAt
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface CredentialsExpireAtMethodsInterface
{
    /**
     * @return bool
     */
    public function isCredentialsNonExpired(): bool;

    /**
     * @return DateTimeInterface|null
     */
    public function getCredentialsExpireAt(): ?DateTimeInterface;

    /**
     * @param DateTimeInterface|null $date
     */
    public function setCredentialsExpireAt(?DateTimeInterface $date): void;
}
