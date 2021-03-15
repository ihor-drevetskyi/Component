<?php

namespace ComponentBundle\Dto\Traits\Money\DiscountPrice;

/**
 * Interface DiscountPriceMethodsInterface
 * @package ComponentBundle\Dto\Traits\Money\DiscountPrice
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface DiscountPriceMethodsInterface
{
    /**
     * @return float
     */
    public function getDiscountPrice(): float;

    /**
     * @param float $discount_price
     */
    public function setDiscountPrice(float $discount_price): void;
}
