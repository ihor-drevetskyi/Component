<?php

namespace ComponentBundle\Model\Traits\Money;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\Money\TotalPrice\TotalPriceMethodsTrait;

/**
 * Trait TotalPriceTrait
 * @package ComponentBundle\Model\Traits\Money
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait TotalPriceTrait
{
    use TotalPriceMethodsTrait;

    /**
     * @var float
     * @Assert\NotBlank()
     * @ORM\Column(name="total_price", type="decimal", precision=11, scale=2, nullable=false)
     */
    protected float $totalPrice = 0;
}
