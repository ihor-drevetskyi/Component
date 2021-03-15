<?php

namespace ComponentBundle\Dto\Traits\Money\FilterPrice;

/**
 * Interface FilterPriceMethodsInterface
 * @package ComponentBundle\Dto\Traits\Money\FilterPrice
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface FilterPriceMethodsInterface
{
    /**
     * @return float|null
     */
    public function getFilterPrice(): ?float;

    /**
     * @param float|null $filter_price
     */
    public function setFilterPrice(?float $filter_price = null): void;
}
