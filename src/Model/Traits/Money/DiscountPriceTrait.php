<?php

namespace ComponentBundle\Model\Traits\Money;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\Money\DiscountPrice\DiscountPriceMethodsTrait;

/**
 * Trait DiscountPriceTrait
 * @package ComponentBundle\Model\Traits\Money
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait DiscountPriceTrait
{
    use DiscountPriceMethodsTrait;

    /**
     * @var float
     * @ORM\Column(name="discount_price", type="decimal", precision=11, scale=2, nullable=false)
     */
    protected float $discountPrice = 0;
}
