<?php

namespace ComponentBundle\Dto\Traits\Date\OrderAt;

use DateTime;
use DateTimeInterface;

/**
 * Trait OrderAtMethodsTrait
 * @package ComponentBundle\Dto\Traits\Date\OrderAt
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait OrderAtMethodsTrait
{
    /**
     * @return DateTimeInterface|null
     */
    public function getOrderAt(): ?DateTimeInterface
    {
        if (!$this->orderAt) {
            self::setOrderAt();
        }

        return $this->orderAt;
    }

    /**
     * @param DateTimeInterface|null $order_at
     */
    public function setOrderAt(?DateTimeInterface $order_at = null): void
    {
        if (!$order_at) {
            $this->orderAt = new DateTime();
        } else {
            $this->orderAt = $order_at;
        }
    }
}
