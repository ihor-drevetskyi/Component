<?php

namespace ComponentBundle\Dto\Traits\Date\ExpiresAt;

use DateTimeInterface;

/**
 * Interface ExpiresAtMethodsInterface
 * @package ComponentBundle\Dto\Traits\Date\ExpiresAt
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface ExpiresAtMethodsInterface
{
    /**
     * @return DateTimeInterface|null
     */
    public function getExpiresAt(): ?DateTimeInterface;

    /**
     * @param DateTimeInterface|null $date
     */
    public function setExpiresAt(?DateTimeInterface $date = null): void;
}
