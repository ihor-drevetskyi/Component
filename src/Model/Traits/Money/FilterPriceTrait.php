<?php

namespace ComponentBundle\Model\Traits\Money;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\Money\FilterPrice\FilterPriceMethodsTrait;

/**
 * Trait FilterPriceTrait
 * @package ComponentBundle\Model\Traits\Money
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait FilterPriceTrait
{
    use FilterPriceMethodsTrait;

    /**
     * @var float|null
     * @ORM\Column(name="filter_price", type="decimal", precision=11, scale=2, nullable=true)
     */
    protected ?float $filterPrice = null;
}
