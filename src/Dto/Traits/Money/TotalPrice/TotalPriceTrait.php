<?php

namespace ComponentBundle\Dto\Traits\Money\TotalPrice;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait TotalPriceTrait
 * @package ComponentBundle\Dto\Traits\Money\TotalPrice
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait TotalPriceTrait
{
    use TotalPriceMethodsTrait;

    /**
     * @var float
     * @Assert\NotBlank()
     */
    protected float $totalPrice = 0;
}
