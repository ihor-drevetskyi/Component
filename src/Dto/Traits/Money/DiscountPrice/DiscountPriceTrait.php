<?php

namespace ComponentBundle\Dto\Traits\Money\DiscountPrice;

/**
 * Trait DiscountPriceTrait
 * @package ComponentBundle\Dto\Traits\Money\DiscountPrice
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait DiscountPriceTrait
{
    use DiscountPriceMethodsTrait;

    /**
     * @var float
     */
    protected float $discountPrice = 0;
}
