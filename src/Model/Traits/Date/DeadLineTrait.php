<?php

namespace ComponentBundle\Model\Traits\Date;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\Date\DeadLine\DeadLineMethodsTrait;

/**
 * Trait DeadLineTrait
 * @package ComponentBundle\Model\Traits\Date
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait DeadLineTrait
{
    use DeadLineMethodsTrait;

    /**
     * @var DateTimeInterface|null
     * @Assert\DateTime()
     * @ORM\Column(name="dead_line", type="datetime", nullable=true)
     */
    protected ?DateTimeInterface $deadLine = null;
}
