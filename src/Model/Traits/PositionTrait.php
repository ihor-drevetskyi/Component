<?php

namespace ComponentBundle\Model\Traits;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\Position\PositionMethodsTrait;

/**
 * Trait PositionTrait
 * @package ComponentBundle\Model\Traits
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait PositionTrait
{
    use PositionMethodsTrait;

    /**
     * @var integer|null
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    protected ?int $position = null;
}
