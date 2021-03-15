<?php

namespace ComponentBundle\Dto\Traits\Money\DiscountPrice;

/**
 * Trait DiscountPriceMethodsTrait
 * @package ComponentBundle\Dto\Traits\Money\DiscountPrice
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait DiscountPriceMethodsTrait
{
    /**
     * @return float
     */
    public function getDiscountPrice(): float
    {
        return $this->discountPrice;
    }

    /**
     * @param float $discount_price
     */
    public function setDiscountPrice(float $discount_price): void
    {
        $this->discountPrice = $discount_price;

        if ($this->discountPrice < 0) {
            $this->discountPrice = 0;
        }
    }
}
