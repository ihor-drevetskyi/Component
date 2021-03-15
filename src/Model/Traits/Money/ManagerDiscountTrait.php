<?php

namespace ComponentBundle\Model\Traits\Money;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\Money\ManagerDiscount\ManagerDiscountMethodsTrait;

/**
 * Trait ManagerDiscountTrait
 * @package ComponentBundle\Model\Traits\Money
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ManagerDiscountTrait
{
    use ManagerDiscountMethodsTrait;

    /**
     * @var integer|null
     * @ORM\Column(name="manager_discount", type="integer", nullable=true)
     */
    protected ?int $managerDiscount = null;
}
