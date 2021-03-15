<?php

namespace ComponentBundle\Model\Traits\Date;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\Date\OrderAt\OrderAtMethodsTrait;

/**
 * Trait OrderAtTrait
 * @package ComponentBundle\Model\Traits\Date
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait OrderAtTrait
{
    use OrderAtMethodsTrait;

    /**
     * @var DateTimeInterface|null
     * @Assert\DateTime()
     * @ORM\Column(name="order_at", type="datetime", nullable=true)
     */
    protected ?DateTimeInterface $orderAt = null;
}
