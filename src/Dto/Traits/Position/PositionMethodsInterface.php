<?php

namespace ComponentBundle\Dto\Traits\Position;

/**
 * Interface PositionMethodsInterface
 * @package ComponentBundle\Dto\Traits\Position
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface PositionMethodsInterface
{
    /**
     * @return int|null
     */
    public function getPosition(): ?int;

    /**
     * @param int|null $position
     */
    public function setPosition(?int $position = null): void;
}
