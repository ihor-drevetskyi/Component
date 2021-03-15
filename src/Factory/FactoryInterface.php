<?php

namespace ComponentBundle\Factory;

/**
 * Interface FactoryInterface
 * @package ComponentBundle\Factory
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface FactoryInterface
{
    /**
     * @return object
     */
    public function createNew(): object;
}
