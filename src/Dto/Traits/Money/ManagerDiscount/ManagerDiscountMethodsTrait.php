<?php

namespace ComponentBundle\Dto\Traits\Money\ManagerDiscount;

/**
 * Trait ManagerDiscountMethodsTrait
 * @package ComponentBundle\Dto\Traits\Money\ManagerDiscount
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ManagerDiscountMethodsTrait
{
    /**
     * @return int|null
     */
    public function getManagerDiscount(): ?int
    {
        return $this->managerDiscount;
    }

    /**
     * @param int|null $manager_discount
     */
    public function setManagerDiscount(?int $manager_discount = null): void
    {
        $this->managerDiscount = $manager_discount;
    }
}
