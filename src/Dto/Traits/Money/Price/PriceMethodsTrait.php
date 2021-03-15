<?php

namespace ComponentBundle\Dto\Traits\Money\Price;

/**
 * Trait PriceMethodsTrait
 * @package ComponentBundle\Dto\Traits\Money\Price
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait PriceMethodsTrait
{
    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}
