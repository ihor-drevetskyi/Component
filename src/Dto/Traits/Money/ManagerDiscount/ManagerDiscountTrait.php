<?php

namespace ComponentBundle\Dto\Traits\Money\ManagerDiscount;

/**
 * Trait ManagerDiscountTrait
 * @package ComponentBundle\Dto\Traits\Money\ManagerDiscount
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ManagerDiscountTrait
{
    use ManagerDiscountMethodsTrait;

    /**
     * @var integer|null
     */
    protected ?int $managerDiscount = null;
}
