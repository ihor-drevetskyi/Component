<?php

namespace ComponentBundle\Dto\Traits\Date\OrderAt;

use DateTimeInterface;

/**
 * Interface OrderAtMethodsInterface
 * @package ComponentBundle\Dto\Traits\Date\OrderAt
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface OrderAtMethodsInterface
{
    /**
     * @return DateTimeInterface|null
     */
    public function getOrderAt(): ?DateTimeInterface;

    /**
     * @param DateTimeInterface|null $order_at
     */
    public function setOrderAt(?DateTimeInterface $order_at = null): void;
}
