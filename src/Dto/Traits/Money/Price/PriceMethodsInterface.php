<?php

namespace ComponentBundle\Dto\Traits\Money\Price;

/**
 * Interface PriceMethodsInterface
 * @package ComponentBundle\Dto\Traits\Money\Price
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface PriceMethodsInterface
{
    /**
     * @return float|null
     */
    public function getPrice(): ?float;

    /**
     * @param float $price
     */
    public function setPrice(float $price): void;
}
