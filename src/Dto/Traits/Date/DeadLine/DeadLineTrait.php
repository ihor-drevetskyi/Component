<?php

namespace ComponentBundle\Dto\Traits\Date\DeadLine;

use DateTimeInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait DeadLineTrait
 * @package ComponentBundle\Dto\Traits\Date\DeadLine
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait DeadLineTrait
{
    use DeadLineMethodsTrait;

    /**
     * @var DateTimeInterface|null
     * @Assert\DateTime()
     */
    protected ?DateTimeInterface $deadLine = null;
}
