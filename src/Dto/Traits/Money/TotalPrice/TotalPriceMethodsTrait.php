<?php

namespace ComponentBundle\Dto\Traits\Money\TotalPrice;

/**
 * Trait TotalPriceMethodsTrait
 * @package ComponentBundle\Dto\Traits\Money\TotalPrice
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait TotalPriceMethodsTrait
{
    /**
     * @return float
     */
    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    /**
     * @param float $total_price
     */
    public function setTotalPrice(float $total_price): void
    {
        $this->totalPrice = $total_price;

        if ($this->totalPrice < 0) {
            $this->totalPrice = 0;
        }
    }
}
