<?php

namespace ComponentBundle\Dto\Traits\Money\FilterPrice;

/**
 * Trait FilterPriceMethodsTrait
 * @package ComponentBundle\Dto\Traits\Money\FilterPrice
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait FilterPriceMethodsTrait
{
    /**
     * @return float|null
     */
    public function getFilterPrice(): ?float
    {
        return $this->filterPrice;
    }

    /**
     * @param float|null $filter_price
     */
    public function setFilterPrice(?float $filter_price = null): void
    {
        $this->filterPrice = $filter_price;
    }
}
