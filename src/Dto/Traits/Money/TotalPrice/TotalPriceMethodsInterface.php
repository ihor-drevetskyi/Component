<?php

namespace ComponentBundle\Dto\Traits\Money\TotalPrice;

/**
 * Interface TotalPriceMethodsInterface
 * @package ComponentBundle\Dto\Traits\Money\TotalPrice
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface TotalPriceMethodsInterface
{
    /**
     * @return float
     */
    public function getTotalPrice(): float;

    /**
     * @param float $total_price
     */
    public function setTotalPrice(float $total_price): void;
}
