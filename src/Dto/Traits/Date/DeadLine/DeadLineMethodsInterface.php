<?php

namespace ComponentBundle\Dto\Traits\Date\DeadLine;

use DateTimeInterface;

/**
 * Interface DeadLineMethodsInterface
 * @package ComponentBundle\Dto\Traits\Date\DeadLine
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface DeadLineMethodsInterface
{
    /**
     * Get deadLine
     * @return DateTimeInterface
     */
    public function getDeadLine(): DateTimeInterface;

    /**
     * @param DateTimeInterface|null $dead_line
     * @return mixed|void
     */
    public function setDeadLine(?DateTimeInterface $dead_line = null): void;
}
