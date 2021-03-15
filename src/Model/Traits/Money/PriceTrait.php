<?php

namespace ComponentBundle\Model\Traits\Money;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\Money\Price\PriceMethodsTrait;

/**
 * Trait PriceTrait
 * @package ComponentBundle\Model\Traits\Money
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait PriceTrait
{
    use PriceMethodsTrait;

    /**
     * @var float|null
     * @Assert\NotBlank()
     * @ORM\Column(name="price", type="decimal", precision=11, scale=2, nullable=false)
     */
    protected ?float $price = null;
}
