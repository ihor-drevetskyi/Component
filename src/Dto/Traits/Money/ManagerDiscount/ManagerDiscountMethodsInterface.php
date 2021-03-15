<?php

namespace ComponentBundle\Dto\Traits\Money\ManagerDiscount;

/**
 * Interface ManagerDiscountMethodsInterface
 * @package ComponentBundle\Dto\Traits\Money\ManagerDiscount
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface ManagerDiscountMethodsInterface
{
    /**
     * @return int|null
     */
    public function getManagerDiscount(): ?int;

    /**
     * @param int|null $manager_discount
     */
    public function setManagerDiscount(?int $manager_discount = null): void;
}
