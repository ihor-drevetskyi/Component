<?php

namespace ComponentBundle\Dto\Traits\Date\OrderAt;

use DateTimeInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait OrderAtTrait
 * @package ComponentBundle\Dto\Traits\Date\OrderAt
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait OrderAtTrait
{
    use OrderAtMethodsTrait;

    /**
     * @var DateTimeInterface|null
     * @Assert\DateTime()
     */
    protected ?DateTimeInterface $orderAt = null;
}
