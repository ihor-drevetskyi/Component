<?php

namespace ComponentBundle\Dto\Traits\Position;

/**
 * Trait PositionMethodsTrait
 * @package ComponentBundle\Dto\Traits\Position
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait PositionMethodsTrait
{
    /**
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @param int|null $position
     */
    public function setPosition(?int $position = null): void
    {
        $this->position = $position;
    }
}
