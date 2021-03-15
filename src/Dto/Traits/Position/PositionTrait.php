<?php

namespace ComponentBundle\Dto\Traits\Position;

/**
 * Trait PositionTrait
 * @package ComponentBundle\Dto\Traits\Position
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait PositionTrait
{
    use PositionMethodsTrait;

    /**
     * @var int|null
     */
    protected ?int $position = null;
}
